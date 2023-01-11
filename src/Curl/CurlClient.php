<?php
	
	namespace FasoDev\SimpleCurlClient\Curl;
	
	use FasoDev\SimpleCurlClient\Http\ClientInterface;
	use FasoDev\SimpleCurlClient\Http\ClientResponseInterface;
	use function count;
	use function curl_init;
	use function curl_setopt_array;
	use const CURLOPT_CUSTOMREQUEST;
	use const CURLOPT_HEADER;
	use const CURLOPT_HTTPHEADER;
	use const CURLOPT_POST;
	use const CURLOPT_RETURNTRANSFER;
	use const CURLOPT_SSL_VERIFYPEER;
	use const CURLOPT_TIMEOUT;
	use const CURLOPT_URL;
	
	class CurlClient implements ClientInterface
	{
		protected array $options = [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HEADER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_TIMEOUT => 10,
		];
		
		protected $curl;
		
		private function __construct(array $options = [])
		{
			$this->boot($options);
		}
		
		public static function client(array $options = []): self
		{
			return new self($options);
		}
		
		/**
		 * @throws CurlRequestErrorException
		 */
		public function get(
			string $url,
			array  $queries = [],
			array  $options = []
		): ClientResponseInterface
		{
			return $this->request($url, 'GET', $queries, $options);
		}
		
		/**
		 * @throws CurlRequestErrorException
		 */
		public function post(
			string $url,
			array  $data = [],
			array  $options = []
		): ClientResponseInterface
		{
			return $this->request($url, 'POST', $data, $options);
		}
		
		/**
		 * @throws CurlRequestErrorException
		 */
		private function request(
			string $url,
			string $method,
			array  $data = [],
			array  $options = []
		): ClientResponseInterface
		{
			$headers = $options['headers'] ?? [];
			unset($options['headers']);
			$defaultRequestOptions = [
					CURLOPT_URL => $url,
					CURLOPT_CUSTOMREQUEST => $method,
					CURLOPT_HTTPHEADER => $headers,
				] + $options;
			
			
			if ($method === 'POST') {
				$defaultRequestOptions[CURLOPT_POSTFIELDS] = $data;
				$defaultRequestOptions[CURLOPT_POST] = true;
			} else if (!empty($data)) {
				// build query string from data
				$defaultRequestOptions[CURLOPT_URL] .= '?' . http_build_query($data);
			}
			
			$this->mergeOptions($defaultRequestOptions);
			
			$response = curl_exec($this->curl);
			
			if ($response === false) {
				throw new CurlRequestErrorException(
					'Error while executing curl request: ' . curl_error($this->curl)
				);
			}
			
			// handle request timeout error
			if (curl_errno($this->curl) === CURLE_OPERATION_TIMEDOUT) {
				throw new CurlRequestErrorException(
					'Request timed out. Please try again later.',
					CURLE_OPERATION_TIMEDOUT
				);
			}
			
			// handle request connection error
			if (curl_errno($this->curl) === CURLE_COULDNT_CONNECT) {
				throw new CurlRequestErrorException(
					'Could not connect to ' . $url . '. Please check your internet connection and try again.',
					curl_errno($this->curl)
				);
			}
			
			$headerSize = curl_getinfo($this->curl, CURLINFO_HEADER_SIZE);
			
			$headers = $this->parseHeaders(substr($response, 0, $headerSize));
			
			$body = substr($response, $headerSize);
			
			return new ClientResponse(
				(int)curl_getinfo($this->curl, CURLINFO_HTTP_CODE),
				$headers,
				$body
			);
		}
		
		public function enableDebug(): self
		{
			$this->options[CURLOPT_VERBOSE] = true;
			return $this;
		}
		
		public function disableDebug(): self
		{
			$this->options[CURLOPT_VERBOSE] = false;
			return $this;
		}
		
		public function enableSSLVerification(): self
		{
			$this->options[CURLOPT_SSL_VERIFYPEER] = true;
			return $this;
		}
		
		public function disableSSLVerification(): self
		{
			$this->options[CURLOPT_SSL_VERIFYPEER] = false;
			return $this;
		}
		
		public function __destruct()
		{
			curl_close($this->curl);
		}
		
		private function parseHeaders(string $content): array
		{
			$headers = [];
			$lines = explode("\r\n", $content);
			foreach ($lines as $line) {
				$parts = explode(': ', $line);
				if (count($parts) === 2) {
					$headers[$parts[0]] = $parts[1];
				}
			}
			
			return $headers;
		}
		
		private function boot(array $options = []): void
		{
			$this->curl = curl_init();
			$this->options = $this->options + $options;
		}
		
		private function mergeOptions(array $options = []): void
		{
			curl_setopt_array(
				$this->curl,
				$this->options + $options
			);
		}
	}

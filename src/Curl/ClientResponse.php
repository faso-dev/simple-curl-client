<?php
	
	namespace FasoDev\SimpleCurlClient\Curl;
	
	use FasoDev\SimpleCurlClient\Http\ClientResponseInterface;
	use function json_decode;
	
	class ClientResponse implements ClientResponseInterface
	{
		protected int $status;
		protected array $headers = [];
		protected string $body;
		
		public function __construct(int $status, array $headers, string $body)
		{
			$this->status = $status;
			$this->headers = $headers;
			$this->body = $body;
		}
		
		public function status(): int
		{
			return $this->status;
		}
		
		public function header(string $header): ?string
		{
			return $this->headers[$header] ?? null;
		}
		
		public function headers(): array
		{
			return $this->headers;
		}
		
		public function body(): string
		{
			return $this->body;
		}
		
		public function json(): array
		{
			return json_decode($this->body, true);
		}
		
		public function xmlArray(): array
		{
			return json_decode(json_encode(simplexml_load_string(
				"<response>{$this->body}</response>"
			)), true);
		}
		
		public function xmlObject(): object
		{
			return json_decode(
				json_encode(simplexml_load_string(
					"<response>{$this->body}</response>"
				))
			);
		}
	}


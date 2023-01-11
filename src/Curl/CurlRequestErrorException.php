<?php
	
	namespace FasoDev\SimpleCurlClient\Curl;
	
	use Exception;
	use FasoDev\SimpleCurlClient\Http\ClientResponseInterface;
	use Throwable;
	
	class CurlRequestErrorException extends Exception implements Throwable
	{
		public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
		{
			parent::__construct($message, $code, $previous);
		}
		
		public static function fromResponse(ClientResponseInterface $response): self
		{
			return new self($response->body(), $response->status());
		}
		
		public static function fromCurlError(string $error): self
		{
			return new self($error);
		}
		
		public static function fromCurlErrorNumber(int $errorNumber): self
		{
			return new self(curl_strerror($errorNumber), $errorNumber);
		}
	}

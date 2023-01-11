<?php
	
	namespace FasoDev\SimpleCurlClient\Tests\Curl;
	
	use FasoDev\SimpleCurlClient\Curl\CurlClient;
	use FasoDev\SimpleCurlClient\Curl\CurlRequestErrorException;
	use PHPUnit\Framework\TestCase;
	
	class ClientResponseTest extends TestCase
	{
		private CurlClient $client;
		
		public function setUp(): void
		{
			$this->client = CurlClient::client();
		}
		
		/**
		 * @throws CurlRequestErrorException
		 */
		public function testGet(): void
		{
			$response = $this->client->get('https://httpbin.org/get');
			$this->assertEquals(200, $response->status());
			$this->assertEquals('application/json', $response->header('content-type'));
			$this->assertNotEmpty($response->body());
			$this->assertNotEmpty($response->json());
		}
		
		/**
		 * @throws CurlRequestErrorException
		 */
		public function testPost(): void
		{
			$response = $this->client->post('https://httpbin.org/post', ['foo' => 'bar']);
			$this->assertEquals(200, $response->status());
			$this->assertEquals('application/json', $response->header('content-type'));
			$this->assertNotEmpty($response->body());
			$this->assertNotEmpty($response->json());
		}
	}

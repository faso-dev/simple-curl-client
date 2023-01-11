<?php
	
	namespace FasoDev\SimpleCurlClient\Tests\Curl;
	
	use FasoDev\SimpleCurlClient\Curl\CurlClientBuilder;
	use FasoDev\SimpleCurlClient\Http\ClientInterface;
	use PHPUnit\Framework\TestCase;
	
	class CurlClientBuilderTest extends TestCase
	{
		public function testClientBuilderBuildMethodRetunClientInterface()
		{
			$this->assertInstanceOf(
				ClientInterface::class,
				CurlClientBuilder::create()->build()
			);
		}
		
		public function testBuilderCreateMethodRetunClientBuilder()
		{
			$this->assertInstanceOf(
				CurlClientBuilder::class,
				CurlClientBuilder::create()
			);
		}
	}

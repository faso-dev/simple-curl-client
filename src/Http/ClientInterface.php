<?php
	
	namespace FasoDev\SimpleCurlClient\Http;
	
	interface ClientInterface
	{
		public function get(
			string $url,
			array  $queries = [],
			array  $options = []): ClientResponseInterface;
		
		public function post(
			string $url,
			array  $data = [],
			array  $options = []): ClientResponseInterface;
	}

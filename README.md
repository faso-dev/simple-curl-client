# simple-curl-client

Simple Curl Client is a simple PHP library to make HTTP requests using the cURL extension.
This package is a very simple implementation of the basic get and post requests.

## Requirements

Before using this package, you need to have a some requirements installed:

- PHP 7.4 or higher
- ext-curl
- ext-json

## Installation

You can install the package using composer:

```bash
composer require faso-dev/simple-curl-client
```

## Usage

When you have installed the package, you can use it in your code:

```php
require __DIR__ . '/vendor/autoload.php';

use FasoDev\SimpleCurlClient\CurlClient;
use FasoDev\SimpleCurlClient\CurlClientBuilder;

$client = CurlClientBuilder::create()
	->defineProxySslVerifyPeer(false)
	->defineTimeOut(30)
	->defineConnectTimeOut(30)
	->defineUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36')
	->build()
;

$client->get('https://httpbin.org/get');
$client->get('https://httpbin.org/get', ['foo' => 'bar']);
$client->post('https://httpbin.org/post', ['foo' => 'bar']);
$client->post('https://httpbin.org/post', ['foo' => 'bar'], [
    'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ],
    CURLOPT_SSL_VERIFYPEER => true,
]);
```
The `get` method is used to make a GET request and have theses parameters:
- `$url` (string): The URL to make the request.
- `$queries` (array): The query parameters to add to the URL.
- `$options` (array): The options to add to the request.
Note that we have a `headers` key in the `$options` array to add the headers to the request.

The `post` method is used to make a POST request and have theses parameters:
- `$url` (string): The URL to make the request.
- `$data` (array): The data to send to the URL.
- `$options` (array): The options to add to the request.
Note that we have a `headers` key in the `$options` array to add the headers to the request.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)

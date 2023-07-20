# 🌐 HTTP Request Helper Function

A simple PHP function to make it easier to send HTTP requests with customizable options.
The purpose of this function is to simplify the process of sending HTTP requests in PHP by providing a reusable function with various options. It utilizes cURL, a widely supported library for making HTTP.
## Features

- Supports different HTTP methods (GET, POST, PUT, DELETE, etc.)
- Allows setting custom headers, including the content type
- Supports sending request bodies in JSON format
- Allows specifying a timeout for the request

## Usage

1. Clone the repository or download the `send_http_request.php` file.

2. Include the file in your PHP project:

   ```php
   require_once 'send_http_request.php';
   ```
3. Call the `send_http_request` function with the desired parameters:
   ```php
    $url = 'https://api.example.com/endpoint';
    $method = 'GET';
    $body = ['name' => 'John', 'email' => 'john@example.com'];
    $headers = ['X-Custom-Header: value'];
    $timeout = 30;
    $contentType = 'application/json';
    
    //Send the request
    $response = send_http_request($method, $url, $body, $headers, $timeout, $contentType);
    ```
    Customize the parameters according to your specific requirements.

4. The function will return the response from the HTTP request as a string. You can process the response data as needed.

## Examples
### GET Request
```php
    $url = 'https://api.example.com/users';
    $response = send_http_request('GET', $url);
    echo $response;
```

### POST Request with JSON Body and Custom Headers
```php
$url = 'https://api.example.com/users';
$body = ['name' => 'John', 'email' => 'john@example.com'];
$headers = ['X-API-Key: YOUR_API_KEY'];
$response = send_http_request('POST', $url, $body, $headers);
echo $response;
```

### PUT Request with Timeout
```php
$url = 'https://api.example.com/users/123';
$body = ['name' => 'John', 'email' => 'john@example.com'];
$timeout = 60; // Set timeout to 60 seconds
$response = send_http_request('PUT', $url, $body, [], $timeout);
echo $response;
```

Feel free to explore the function and adapt it to your specific use cases.

<a href="https://www.buymeacoffee.com/idanshr" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/guidelines/download-assets-sm-1.svg" alt="buy me a coffee" width="200px"/></a>

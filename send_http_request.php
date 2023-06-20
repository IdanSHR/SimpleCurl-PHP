function send_http_request($method, $url, $body = null, $headers = [], $timeout = 30, $contentType = 'application/json') {
    $curl = curl_init();
  
    // URL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  
    // Method
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
  
    // Headers
    $defaultHeaders = ['Content-Type: '.$contentType];
    $allHeaders = array_merge($defaultHeaders, $headers);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $allHeaders);
  
    // Body
    if (!empty($body)) {
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
    }
  
    // Timeout
    curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
  
    $response = curl_exec($curl);
  
    if ($response === false) {
        echo 'Error: ' . curl_error($curl);
        return null;
    }
  
    curl_close($curl);
    return $response;
}

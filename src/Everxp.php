<?php

namespace Everxp;

class Everxp
{
    protected $config = [];

    public function __construct($config = [])
    {
        $this->config = $config;
    }

    private function execute_request_get($endpoint, $config)
    {
        $domain = 'https://api.everxp.com';

        if (empty($config)) {
            return json_encode('Request parameters are missing.');
        }

        // Ensure API Key is included in the config for old requests
        if (!isset($config['api_key'])) {
            return json_encode('API Key is missing for this request.');
        }

        $url = "$domain/heading/$endpoint?";
        $remove_empty = array_filter($config, function ($value) {
            return is_string($value) && strlen($value);
        });
        $url .= http_build_query($remove_empty);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        $response_decoded = json_decode($response, true);
        return $response_decoded['heading'] ?? $response;
    }

    private function execute_request_bearer($config)
    {
        $domain = 'https://api.everxp.com';

        if (empty($config)) {
            return json_encode('Request parameters are missing.');
        }

        if (!isset($this->config['api_key'])) {
            return json_encode('Bearer token is missing in the main configuration.');
        }

        $url = "$domain/v2/request/";

        $remove_empty = array_filter($config, function ($value) {
            return is_string($value) && strlen($value);
        });
        $payload = json_encode($remove_empty);

        $headers = [
            'Authorization: Bearer ' . $this->config['api_key'],
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        $response_decoded = json_decode($response, true);
        return $response_decoded['heading'] ?? $response;
    }

    // Old requests: API Key passed with the request configuration
    public function xp_pattern($config)
    {
        return $this->execute_request_get('pattern', $config);
    }

    public function xp_quote($config)
    {
        return $this->execute_request_get('quote', $config);
    }

    public function xp_time($config)
    {
        return $this->execute_request_get('time', $config);
    }

    public function xp_cta($config)
    {
        return $this->execute_request_get('cta', $config);
    }

    public function xp_humanitarian($config)
    {
        return $this->execute_request_get('humanitarian', $config);
    }

    // New bearer request: API Key in Authorization header
    public function xp_request($config)
    {
        return $this->execute_request_bearer($config);
    }
}

?>

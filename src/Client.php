<?php

    namespace Bytelovers\Affise;

    use GuzzleHttp\Client as GuzzleClient;

    class Client {
        private $apiUrl = 'http://%s.affise.com/%s/%s';

        private $apiVersion = '3.0';

        private $apiDomain;

        private $apiKey;

        private $headers = ['User-Agent' => 'Affise-php-client'];

        private $httpClient;

        public function url() {
            return sprintf($this->apiUrl, $this->apiDomain, $this->apiVersion);
        }

        public function __construct($apiDomain, $aplKey) {
            $this->setApiDomain($apiDomain);
            $this->setHeaders(['API-Key' => $aplKey]);

            $this->setHttpClient(new GuzzleClient(['headers' => $this->getHeaders()]));
        }

        public function api($class) {
            $class = 'Bytelovers\\Affise\\Api\\' . $class;
            return new $class($this);
        }

        public function get($endpoint, $params = []) {
            $req = $this->buildUrl($endpoint, $params);
            $req = urldecode($req);

            $res = $this->getHttpClient()->get($req);
            return $this->handleResponse($res);
        }

        public function post($endpoint, $data = []) {
            $res = $this->getHttpClient()->post(
                $endpoint,
                ['body' => $data]
            );
            return $this->handleResponse($res);
        }

        private function buildUrl($endpoint, $params) {
            $url = sprintf($this->apiUrl, $this->getApiDomain(), $this->getApiVersion(), $endpoint);

            if ($params) {
                $url .= '?' . http_build_query($params);
            }

            return $url;
        }

        private function handleResponse($res) {
            $statusCode = $res->getStatusCode();
            $body = json_decode($res->getbody());

            if ($statusCode >= 200 && $statusCode < 300) {
                return $body;
            }
            throw new \Exception($body->message, $statusCode);
        }

        /**
         * @return string
         */
        public function getApiUrl(): string
        {
            return $this->apiUrl;
        }

        /**
         * @param string $apiUrl
         */
        public function setApiUrl(string $apiUrl)
        {
            $this->apiUrl = $apiUrl;
        }

        /**
         * @return string
         */
        public function getApiVersion(): string
        {
            return $this->apiVersion;
        }

        /**
         * @param string $apiVersion
         */
        public function setApiVersion(string $apiVersion)
        {
            $this->apiVersion = $apiVersion;
        }

        /**
         * @return mixed
         */
        public function getApiDomain()
        {
            return $this->apiDomain;
        }

        /**
         * @param mixed $apiDomain
         */
        public function setApiDomain($apiDomain)
        {
            $this->apiDomain = $apiDomain;
        }

        /**
         * @return mixed
         */
        public function getApiKey()
        {
            return $this->apiKey;
        }

        /**
         * @param mixed $apiKey
         */
        public function setApiKey($apiKey)
        {
            $this->apiKey = $apiKey;
        }

        /**
         * @return array
         */
        public function getHeaders(): array
        {
            return $this->headers;
        }

        /**
         * @param array $headers
         */
        public function setHeaders(array $headers)
        {
            $this->headers = array_merge($this->headers, $headers);
        }

        /**
         * @return mixed
         */
        public function getHttpClient()
        {
            return $this->httpClient;
        }

        /**
         * @param mixed $httpClient
         */
        public function setHttpClient($httpClient)
        {
            $this->httpClient = $httpClient;
        }
    }

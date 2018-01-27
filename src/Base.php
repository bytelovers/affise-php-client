<?php

    namespace Bytelovers\Affise;

    class Base {

        private $httpClient;

        protected $endpointBase;

        public function __construct($httpClient) {
            $this->setHttpClient($httpClient);
        }

        public function get($path, $params = []) {
            return $this->getHttpClient()->get($path, $params);
        }

        //TODO: Implement
        public function post($path, $data) {
            return $this->getHttpClient()->post($path, $data);
        }

        //TODO: Implement
        public function delete($path) {
            return $this->getHttpClient()->delete($path);
        }

        /**
         * @return mixed
         */
        public function getHttpClient() {
            return $this->httpClient;
        }

        /**
         * @param mixed $httpClient
         */
        public function setHttpClient($httpClient) {
            $this->httpClient = $httpClient;
        }

    }
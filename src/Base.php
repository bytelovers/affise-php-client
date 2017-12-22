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
        public function post($path, $params = []) {
            throw new \Exception('Method not implemented');
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
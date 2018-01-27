<?php
    namespace Bytelovers\Affise\Api;

    use Bytelovers\Affise\Base;

    class Admin extends Base {
        protected $endpointAdminBase = "admin";

        public function getEndpointAdminBase(): string {
            return $this->endpointAdminBase;
        }

        public function getAdminEndpointBase(): string {
            return implode("/", [
                $this->getEndpointAdminBase()
            ]);
        }
    }
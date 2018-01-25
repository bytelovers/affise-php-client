<?php

    namespace Bytelovers\Affise\Api\Affiliate;

    use Bytelovers\Affise\Base;

    class Partner extends Base {
        protected $endpointBase = "partner";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function setEndpointBase(string $endpointBase) {
            $this->endpointBase = $endpointBase;
        }

        public function getOfferList($params = []) {
            return $this->get(implode("/", [
                $this->endpointBase(),
                "offers"
            ]), $params);
        }
    }
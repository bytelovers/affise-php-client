<?php
    namespace Bytelovers\Affise\Api\Statics;

    use Bytelovers\Affise\Base;

    class Conversion extends Base {
        protected $endpointBase = "stats";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function setEndpointBase(string $endpointBase) {
            $this->endpointBase = $endpointBase;
        }

        public function getConversions($params = []) {

            return $this->get(implode("/", [
                $this->endpointBase(),
                "conversions"
            ]), $params);
        }
    }
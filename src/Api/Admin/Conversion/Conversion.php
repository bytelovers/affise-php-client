<?php
    namespace Bytelovers\Affise\Api\Admin\Conversion;

    use Bytelovers\Affise\Api\Admin\Admin;

    class Conversion extends Admin {
        protected $endpointBase = "conversion";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function addConversion($data) {
            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "import"
            ]),
            $data);
        }

        public function addConversions($data) {
            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase() . "s",
                "import"
            ]),
            $data);
        }

        public function updateConversion($data) {
            if (!$data["ids"]) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "edit",

            ]),
            $data);
        }
    }

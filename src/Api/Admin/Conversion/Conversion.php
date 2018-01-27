<?php
    namespace Bytelovers\Affise\Api\Admin\Conversion;

    use Bytelovers\Affise\Api\Admin;

    class Conversion extends Admin {
        protected $endpointBase = "conversion";

        public function addConversion($data) {
            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
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
                "edit",

            ]),
            $data);
        }
    }
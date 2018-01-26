<?php
    namespace Bytelovers\Affise\Api\Admin\Offer;

    use Bytelovers\Affise\Api;

    class Offer extends Admin {
        protected $endpointBase = "offer";

        public function addOffer($data) {
            $this->post(implode("/", [
                $this->getEndpointAdminBase()
            ]),
            $data);
        }

        public function updateOffer($id, $data) {
            if (!$id) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $id
            ]),
            $data);
        }

        public function deleteOffer($id) {
            if (!$id) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                "delete"
            ]),
            ['offer_id' => [$id]]);
        }
    }
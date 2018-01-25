<?php
    namespace Bytelovers\Affise\Api\Admin\Offer;

    namespace Bytelovers\Affise\Api\Admin;

    class Offer extends Admin {
        public function addOffer($data) {
            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                "offer"
            ]),
            $data);
        }

        public function updateOffer($id, $data) {
            if (!$id) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                "offer",
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
                "offer",
                "delete"
            ]),
            ['offer_id' => [$id]]);
        }
    }
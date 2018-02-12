<?php
    namespace Bytelovers\Affise\Api\Admin\Offer;

    use Bytelovers\Affise\Api\Admin\Admin;

    class Offer extends Admin {
        protected $endpointBase = "offer";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function addOffer($data) {
            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase()
            ]),
            $data);
        }

        public function updateOffer($id, $data) {
            if (!$id) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
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
                $this->getEndpointBase(),
                "delete"
            ]),
            ['offer_id' => [$id]]);
        }
    }
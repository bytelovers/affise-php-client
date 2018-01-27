<?php
    namespace Bytelovers\Affise\Api\Admin\Advertiser;

    use Bytelovers\Affise\Api\Admin;

    class Advertiser extends Admin {
        protected $endpointBase = "advertiser";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function getAdvertiserList() {
            $this->get(implode("/", [
                $this->getEndpointAdminBase() . "s",
                $this->getEndpointBase()
            ]));
        }

        public function addAdvertiser($data) {
            if (!$data["title"]) {
                throw new \Exception("The param TITLE is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase()
            ]),
            $data);
        }

        public function updateAdvertiser($advertiserId, $data) {
            if (!$advertiserId) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                $advertiserId
            ]),
            $data);
        }

        public function sendPassword($advertiserId) {
            if (!$advertiserId) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                $advertiserId,
                "sendpass"
            ]), null);
        }

        public function enableAffiliate($data) {
            if (!$data["advertisers_id"]) {
                throw new \Exception("The param \"advertisers_id\" is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "enable-affiliate"
            ]),
            $data);
        }

        public function disableAffiliate($data) {
            if (!$data["advertisers_id"]) {
                throw new \Exception("The param \"advertisers_id\" is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "disable-affiliate"
            ]),
            $data);
        }
    }
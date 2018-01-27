<?php
    namespace Bytelovers\Affise\Api\Admin\Advertiser;

    use Bytelovers\Affise\Api\Admin;

    class Advertiser extends Admin {
        protected $endpointBase = "advertiser";

        public function getAdvertiserList() {
            $this->get(implode("/", [
                $this->getEndpointAdminBase() . "s"
            ]));
        }

        public function addAdvertiser($data) {
            if (!$data["title"]) {
                throw new \Exception("The param TITLE is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
            ]),
            $data);
        }

        public function updateAdvertiser($advertiserId, $data) {
            if (!$advertiserId) {
                throw new \Exception("The param ID is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
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
                $advertiserId,
                "sendpass"
            ]));
        }

        public function enableAffiliate($data) {
            if (!$data["advertisers_id"]) {
                throw new \Exception("The param \"advertisers_id\" is required");
            }

            $this->post(implode("/", [
                $this->getEndpointAdminBase(),
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
                "disable-affiliate"
            ]),
            $data);
        }
    }
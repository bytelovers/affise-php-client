<?php

    namespace Bytelovers\Affise\Api\Admin\Affiliate;

    use Bytelovers\Affise\Api;

    class Partner extends Admin {
        protected $endpointBase = "partner";

        public function getAffiliateList($params = []) {
            return $this->get(implode("/", [
                $this->endpointAdminBase() . "s",
            ]),
            $params);
        }

        public function addAffiliate($data) {
            if (!$data["email"]) {
                throw new \Exception("The param EMAIL is required");
            }
            return $this->post(implode("/", [
                $this->endpointAdminBase(),
            ]),
            $data);
        }

        public function updateAffiliate($affiliateId, $data) {
            if (!$affiliateId) {
                throw new \Exception("The param ID is required");
            }
            return $this->post(implode("/", [
                $this->endpointAdminBase(),
                $affiliateId
            ]),
            $data);
        }

        public function changePassword($affiliateId) {
            if (!$affiliateId) {
                throw new \Exception("The param ID is required");
            }
            return $this->post(implode("/", [
                $this->endpointAdminBase(),
                "password",
                $affiliateId
            ]));
        }

        public function addPostback($data) {
            if (!data["url"]) {
                throw new \Exception("The param URL is required");
            }
            return $this->post(implode("/", [
                $this->endpointAdminBase(),
                "postback"
            ]),
            $data);
        }

        public function updatePostback($postbackId, $data) {
            if (!$postbackId) {
                throw new \Exception("The param ID is required");
            }
            return $this->post(implode("/", [
                $this->endpointAdminBase(),
                "postback",
                $postbackId
            ]),
            $data);
        }

        public function deletePostback($postbackId) {
            if (!$postbackId) {
                throw new \Exception("The param ID is required");
            }
            return $this->delete(implode("/", [
                $this->endpointAdminBase(),
                "postback",
                $postbackId,
                "remove"
            ]));
        }
    }
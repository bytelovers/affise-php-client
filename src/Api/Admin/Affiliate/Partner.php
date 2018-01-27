<?php

    namespace Bytelovers\Affise\Api\Admin\Affiliate;

    use Bytelovers\Affise\Api\Admin;

    class Partner extends Admin {
        protected $endpointBase = "partner";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function getAffiliateList($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointAdminBase() . "s",
                $this->getEndpointBase(),
            ]),
            $params);
        }

        public function addAffiliate($data) {
            if (!$data["email"]) {
                throw new \Exception("The param EMAIL is required");
            }
            return $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
            ]),
            $data);
        }

        public function updateAffiliate($affiliateId, $data) {
            if (!$affiliateId) {
                throw new \Exception("The param ID is required");
            }
            return $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                $affiliateId
            ]),
            $data);
        }

        public function changePassword($affiliateId) {
            if (!$affiliateId) {
                throw new \Exception("The param ID is required");
            }
            return $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "password",
                $affiliateId
            ]), null);
        }

        public function addPostback($data) {
            if (!$data["url"]) {
                throw new \Exception("The param URL is required");
            }
            return $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "postback"
            ]),
            $data);
        }

        public function updatePostback($postbackId, $data) {
            if (!$postbackId) {
                throw new \Exception("The param ID is required");
            }
            return $this->post(implode("/", [
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
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
                $this->getEndpointAdminBase(),
                $this->getEndpointBase(),
                "postback",
                $postbackId,
                "remove"
            ]));
        }
    }
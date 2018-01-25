<?php
    /**
     * Created by PhpStorm.
     * User: alfredodelacalle
     * Date: 22/12/17
     * Time: 0:41
     */

    namespace Bytelovers\Affise\Api\Offer;

    use Bytelovers\Affise\Base;

    class Offer extends Base {
        protected $endpointBase = "offer";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        private function getEndpointBasePlural(): string {
            return $this->endpointBase . "s";
        }

        public function getOfferList($params = []) {
            return $this->get($this->getEndpointBasePlural(), $params);
        }

        public function getOfferById($id = null) {
            if (!$id) {
                throw new \Exception("The param ID is required");
            }

            return $this->get(implode("/", [
                $this->getEndpointBase(),
                $id
            ]));
        }

        public function getOfferCategories($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "categories"
            ]), $params);
        }

    }
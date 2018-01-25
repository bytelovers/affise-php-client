<?php
    /**
     * Created by PhpStorm.
     * User: alfredodelacalle
     * Date: 23/12/17
     * Time: 14:40
     */

    namespace Bytelovers\Affise\Api\Statics;

    use Bytelovers\Affise\Base;

    class By extends Base {
        protected $endpointBase = "stats";

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function setEndpointBase(string $endpointBase) {
            $this->endpointBase = $endpointBase;
        }

        public function getByDate($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbydate"
            ]), $params);
        }

        public function getByHour($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbyhour"
            ]), $params);
        }

        public function getBySub($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbysub"
            ]), $params);
        }

        public function getByOffer($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbyprogram"
            ]), $params);
        }

        /**
         * By Advertiser - Only admin Api-Key
         *
         * @param array $params
         * @return mixed
         */
        public function getByAdvertiser($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbyadvertiser"
            ]), $params);
        }


        /**
         * By Affiliate - Only admin Api-Key
         *
         * @param array $params
         * @return mixed
         */
        public function getByAffiliate($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbypartner"
            ]), $params);
        }

        /**
         * By Affiliate and Date - Only admin Api-Key
         *
         * @param array $params
         * @return mixed
         */
        public function getByAffiliateAndDate($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbypartnerbydate"
            ]), $params);
        }

        public function getByCountry($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbycountries"
            ]), $params);
        }

        public function getByBrowser($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbybrowsers"
            ]), $params);
        }

        public function getByOs($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbyos"
            ]), $params);
        }

        public function getByOsVersion($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbyversions"
            ]), $params);
        }

        public function getByGoal($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbygoal"
            ]), $params);
        }

        public function getByCity($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbycities"
            ]), $params);
        }

        public function getByDevice($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbydevices"
            ]), $params);
        }

        public function getByDeviceModel($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "getbydevicemodels"
            ]), $params);
        }

        /**
         * Find stubs - Only partner Api-Key
         *
         * @param array $params
         * @return mixed
         */
        public function findStubs($params = []) {
            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "find-stubs"
            ]), $params);
        }

        /**
         * By server postback - Only admin Api-Key
         *
         * @param array $params
         * @return mixed
         * @throws \Exception
         */
        public function getByServerPostback($params = []) {

            if (!array_key_exists("date_from", $params) ||
                !array_key_exists("date_to", $params)) {
                throw new \Exception("Mandatory fields not filled");
            }

            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "serverpostbacks"
            ]), $params);
        }

        /**
         * By Affiliate postback - Only admin Api-Key
         * @param array $params
         * @return mixed
         * @throws \Exception
         */
        public function getByAffiliatePostback($params = []) {

            if (!array_key_exists("date_from", $params) ||
                !array_key_exists("date_to", $params)) {
                throw new \Exception("Mandatory fields not filled");
            }

            return $this->get(implode("/", [
                $this->getEndpointBase(),
                "affiliatepostbacks"
            ]), $params);
        }
    }
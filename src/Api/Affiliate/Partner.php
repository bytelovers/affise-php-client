<?php

    namespace Bytelovers\Affise\Api\Affiliate;

    use Bytelovers\Affise\Base;

    class Partner extends Base {
        protected $endpointBase = 'partner';

        public function getOfferList($params = []) {
            return $this->get($this->endpointBase . '/offers', $params);
        }
    }
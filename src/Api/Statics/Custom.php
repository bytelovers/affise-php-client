<?php
    namespace Bytelovers\Affise\Api\Statics;

    use Bytelovers\Affise\Base;

    class Custom extends Base {
        protected $endpointBase = 'stats';

        public function getCustom($params = []) {

            if (!array_key_exists('slice', $params) ||
                !array_key_exists('filter', $params)) {
                throw new \Exception('Mandatory fields not filled');
            }

            return $this->get(implode('/', [
                $this->endpointBase,
                'custom'
            ]), $params);
        }
    }
<?php
    namespace Bytelovers\Affise\Api\Statics;

    use Bytelovers\Affise\Base;
    use Mockery\Exception;

    class Click extends Base {
        protected $endpointBase = 'stats';

        public function getEndpointBase(): string {
            return $this->endpointBase;
        }

        public function setEndpointBase(string $endpointBase) {
            $this->endpointBase = $endpointBase;
        }


        /**
         * Get clicks - Only for admin API-Key
         *
         * @param array $params
         * @return mixed
         * @throws \Exception
         */
        public function getClicks($params = []) {
            if (!array_key_exists('date_from', $params) ||
            !array_key_exists('date_to', $params)) {
                throw new \Exception('Mandatory fields not filled');
            }

            return $this->get(implode('/', [
                $this->getEndpointBase(),
                'clicks'
            ]), $params);
        }
    }
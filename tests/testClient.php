<?php

    namespace Bytelovers\Affise\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\Affise\Client;
    use Bytelovers\Affise\Api\Affiliate\Partner;

    class TestClient extends TestCase {

        public function testApi() {
            $affiseClient = new Client('a', 'a');
            $affiseClient = $affiseClient->api('Affiliate\Partner');

            $this->assertInstanceOf(Partner::class, $affiseClient);
        }
    }
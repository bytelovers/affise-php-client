<?php

    namespace Bytelovers\Affise\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\Affise\Client;

    class TestClient extends TestCase {

        public function testAgpiVersion() {
            $affiseClient = new Client('a', 'a');
            $this->assertEquals($affiseClient->getApiVersion(), '3.0');
        }
    }
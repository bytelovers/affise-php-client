<?php
    namespace Bytelovers\Affise;

    abstract class StatusCodes {
        const CONFIRMED     = 1;
        const PENDING       = 2;
        const DECLINED      = 3;
        const NOT_FOUND     = 4;
        const HOLD          = 5;
        const PENDING_CAP   = 6;
    }

    abstract class StatusNames {
        const CONFIRMED     = 'cofirmed';
        const PENDING       = 'pending';
        const DECLINED      = 'declined';
        const NOT_FOUND     = 'not_found';
        const HOLD          = 'hold';
        const PENDING_CAP   = 'pending_cap';
    }
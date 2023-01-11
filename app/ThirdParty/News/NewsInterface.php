<?php

/**
 * this interface for integrate with different sms providers like msegat, ...
 */

namespace App\ThirdParty\News;

interface NewsInterface
{
    public function list($q);
}

<?php

namespace CleaniqueCoders\Utilities;

use Billplz\Client;

/**
 * BillPlz Wrapper
 */
class Billplz
{
    private $billplz;

    public function __construct()
    {
        $this->billplz = Client::make(config('billplz.api_key'));

        $this->billplz->useVersion(config('billplz.version'));

        if (app()->environment() != "production") {
            $this->billplz->useSandbox();
        }
    }

    public static function make()
    {
        return (new self())->billplz;
    }
}
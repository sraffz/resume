<?php
/*
 * Billplz Helper
 */
if (!function_exists('billplz')) {
    function billplz()
    {
        return \CleaniqueCoders\Utilities\Billplz::make();
    }
}
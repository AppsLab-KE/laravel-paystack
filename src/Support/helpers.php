<?php

if (! function_exists("paystack"))
{
    function paystack() {

        return app()->make('paystack');
    }
}
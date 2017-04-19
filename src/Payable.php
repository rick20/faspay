<?php

namespace Rick20\Faspay;

interface Payable
{
    public function getPayableName();

    public function getPayablePrice();
}
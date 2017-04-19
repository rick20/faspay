<?php

namespace Rick20\Faspay;

interface BillingProfileInterface
{
    public function description();
    
    public function generate(Payment $payment);
}
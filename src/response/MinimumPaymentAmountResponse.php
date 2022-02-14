<?php

namespace Nowpayments\Template\Response;

class MinimumPaymentAmountResponse
{
    private $currencyForm;
    private $currencyTo;
    private $minAmount;

    /**
     * MinimumPaymentAmountResponse constructor.
     * @param $currencyForm
     * @param $currencyTo
     * @param $minAmount
     */
    public function __construct($currencyForm, $currencyTo, $minAmount)
    {
        $this->currencyForm = $currencyForm;
        $this->currencyTo = $currencyTo;
        $this->minAmount = $minAmount;
    }

    /**
     * @return mixed
     */
    public function getCurrencyForm()
    {
        return $this->currencyForm;
    }

    /**
     * @return mixed
     */
    public function getCurrencyTo()
    {
        return $this->currencyTo;
    }

    /**
     * @return mixed
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }
}
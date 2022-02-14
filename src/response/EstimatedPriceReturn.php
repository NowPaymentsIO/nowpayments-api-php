<?php


namespace Nowpayments\Template\Response;


class EstimatedPriceReturn
{
    private $currencyFrom;
    private $amountFrom;
    private $currencyTo;
    private $estimatedAmount;

    /**
     * EstimatedPriceReturn constructor.
     * @param $currencyFrom
     * @param $amountFrom
     * @param $currencyTo
     * @param $estimatedAmount
     */
    public function __construct($currencyFrom, $amountFrom, $currencyTo, $estimatedAmount)
    {
        $this->currencyFrom = $currencyFrom;
        $this->amountFrom = $amountFrom;
        $this->currencyTo = $currencyTo;
        $this->estimatedAmount = $estimatedAmount;
    }

    /**
     * @return mixed
     */
    public function getCurrencyFrom()
    {
        return $this->currencyFrom;
    }

    /**
     * @param mixed $currencyFrom
     */
    public function setCurrencyFrom($currencyFrom): void
    {
        $this->currencyFrom = $currencyFrom;
    }

    /**
     * @return mixed
     */
    public function getAmountFrom()
    {
        return $this->amountFrom;
    }

    /**
     * @param mixed $amountFrom
     */
    public function setAmountFrom($amountFrom): void
    {
        $this->amountFrom = $amountFrom;
    }

    /**
     * @return mixed
     */
    public function getCurrencyTo()
    {
        return $this->currencyTo;
    }

    /**
     * @param mixed $currencyTo
     */
    public function setCurrencyTo($currencyTo): void
    {
        $this->currencyTo = $currencyTo;
    }

    /**
     * @return mixed
     */
    public function getEstimatedAmount()
    {
        return $this->estimatedAmount;
    }

    /**
     * @param mixed $estimatedAmount
     */
    public function setEstimatedAmount($estimatedAmount): void
    {
        $this->estimatedAmount = $estimatedAmount;
    }
}
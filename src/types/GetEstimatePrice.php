<?php


namespace Nowpayments\Template\Response;


class GetEstimatePrice
{
    private $amount;
    private $currency_from;
    private $currency_to;

    /**
     * GetEstimatePrice constructor.
     * @param $amount
     * @param $currency_from
     * @param $currency_to
     */
    public function __construct(int $amount, string $currency_from, string $currency_to)
    {
        $this->amount = $amount;
        $this->currency_from = $currency_from;
        $this->currency_to = $currency_to;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrencyFrom(): string
    {
        return $this->currency_from;
    }

    /**
     * @param string $currency_from
     */
    public function setCurrencyFrom(string $currency_from): void
    {
        $this->currency_from = $currency_from;
    }

    /**
     * @return string
     */
    public function getCurrencyTo(): string
    {
        return $this->currency_to;
    }

    /**
     * @param string $currency_to
     */
    public function setCurrencyTo(string $currency_to): void
    {
        $this->currency_to = $currency_to;
    }
}
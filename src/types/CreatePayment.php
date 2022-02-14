<?php


namespace Nowpayments\Template\Response;


class CreatePayment
{
    private $price_amount;
    private $price_currency;
    private $pay_amount = -1;
    private $pay_currency;
    private $ipn_callback_url = "";
    private $order_id = "";
    private $order_description = "";
    private $purchase_id = "";
    private $payout_address = "";
    private $payout_currency = "";
    private $payout_extra_id = "";
    private $fixed_rate = "";

    /**
     * CreatePayment constructor.
     * @param $price_amount
     * @param $price_currency
     * @param $pay_currency
     */
    public function __construct($price_amount, $price_currency, $pay_currency)
    {
        $this->price_amount = $price_amount;
        $this->price_currency = $price_currency;
        $this->pay_currency = $pay_currency;
    }

    /**
     * @return mixed
     */
    public function getPriceAmount()
    {
        return $this->price_amount;
    }

    /**
     * @param mixed $price_amount
     */
    public function setPriceAmount($price_amount): void
    {
        $this->price_amount = $price_amount;
    }

    /**
     * @return mixed
     */
    public function getPriceCurrency()
    {
        return $this->price_currency;
    }

    /**
     * @param mixed $price_currency
     */
    public function setPriceCurrency($price_currency): void
    {
        $this->price_currency = $price_currency;
    }

    /**
     * @return int
     */
    public function getPayAmount(): int
    {
        return $this->pay_amount;
    }

    /**
     * @param int $pay_amount
     */
    public function setPayAmount(int $pay_amount): void
    {
        $this->pay_amount = $pay_amount;
    }

    /**
     * @return mixed
     */
    public function getPayCurrency()
    {
        return $this->pay_currency;
    }


    /**
     * @return bool
     */
    public function isSetPayCurrency(): bool {
        return strlen($this->pay_currency) !== 0;
    }
    /**
     * @param mixed $pay_currency
     */
    public function setPayCurrency($pay_currency): void
    {
        $this->pay_currency = $pay_currency;
    }

    /**
     * @return string
     */
    public function getIpnCallbackUrl(): string
    {
        return $this->ipn_callback_url;
    }

    /**
     * @return bool
     */
    public function isSetIpnCallbackUrl(): bool {
        return strlen($this->ipn_callback_url) !== 0;
    }

    /**
     * @param string $ipn_callback_url
     */
    public function setIpnCallbackUrl(string $ipn_callback_url): void
    {
        $this->ipn_callback_url = $ipn_callback_url;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->order_id;
    }

    /**
     * @return bool
     */
    public function isSetOrderId(): bool {
        return strlen($this->order_id) !== 0;
    }

    /**
     * @param string $order_id
     */
    public function setOrderId(string $order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return string
     */
    public function getOrderDescription(): string
    {
        return $this->order_description;
    }

    /**
     * @return bool
     */
    public function isSetOrderDescription(): bool {
        return strlen($this->order_description) !== 0;
    }

    /**
     * @param string $order_description
     */
    public function setOrderDescription(string $order_description): void
    {
        $this->order_description = $order_description;
    }

    /**
     * @return string
     */
    public function getPurchaseId(): string
    {
        return $this->purchase_id;
    }

    /**
     * @return bool
     */
    public function isSetPurchaseId(): bool {
        return strlen($this->purchase_id) !== 0;
    }

    /**
     * @param string $purchase_id
     */
    public function setPurchaseId(string $purchase_id): void
    {
        $this->purchase_id = $purchase_id;
    }

    /**
     * @return string
     */
    public function getPayoutAddress(): string
    {
        return $this->payout_address;
    }

    /**
     * @return bool
     */
    public function isSetPayoutAddress(): bool {
        return strlen($this->payout_address) !== 0;
    }


    /**
     * @param string $payout_address
     */
    public function setPayoutAddress(string $payout_address): void
    {
        $this->payout_address = $payout_address;
    }

    /**
     * @return string
     */
    public function getPayoutCurrency(): string
    {
        return $this->payout_currency;
    }

    /**
     * @return bool
     */
    public function isSetPayoutCurrency(): bool {
        return strlen($this->payout_currency) !== 0;
    }

    /**
     * @param string $payout_currency
     */
    public function setPayoutCurrency(string $payout_currency): void
    {
        $this->payout_currency = $payout_currency;
    }

    /**
     * @return string
     */
    public function getPayoutExtraId(): string
    {
        return $this->payout_extra_id;
    }

    /**
     * @return bool
     */
    public function isSetPayoutExtraId(): bool {
        return strlen($this->payout_extra_id) !== 0;
    }

    /**
     * @param string $payout_extra_id
     */
    public function setPayoutExtraId(string $payout_extra_id): void
    {
        $this->payout_extra_id = $payout_extra_id;
    }

    /**
     * @return string
     */
    public function getFixedRate(): string
    {
        return $this->fixed_rate;
    }

    /**
     * @return bool
     */
    public function isSetFixedRate(): bool {
        return strlen($this->fixed_rate) !== 0;
    }

    /**
     * @param string $fixed_rate
     */
    public function setFixedRate(string $fixed_rate): void
    {
        $this->fixed_rate = $fixed_rate;
    }
}
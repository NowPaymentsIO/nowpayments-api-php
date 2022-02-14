<?php

namespace Nowpayments\Template\Response;

class CreateInvoice
{
    private $priceAmount; //(required) - the amount that users have to pay for the order stated in fiat currency. In case you do not indicate the price in crypto, our system will automatically convert this fiat amount into its crypto equivalent.
    private $priceCurrency; //(required) - the fiat currency in which the price_amount is specified (usd, eur, etc).
    private $payCurrency; //(optional) - the crypto currency in which the pay_amount is specified (btc, eth, etc).If not specified, can be chosen on the invoice_url
    private $ipnCallbackUrl; //(optional) - url to receive callbacks, should contain "http" or "https", eg. "https://nowpayments.io"
    private $orderId;//(optional) - inner store order ID, e.g. "RGDBP-21314"
    private $orderDescription; //(optional) - inner store order description, e.g. "Apple Macbook Pro 2019 x 1"
    private $successUrl; //(optional) - url where the customer will be redirected after successful payment.
    private $cancelUrl; //(optional) - url where the customer will be redirected after failed payment.

    /**
     * CreateInvoice constructor.
     * @param float $priceAmount
     * @param string $priceCurrency
     * @param string $payCurrency
     * @param string $ipnCallbackUrl
     * @param string $orderId
     * @param string $orderDescription
     * @param string $successUrl
     * @param string $cancelUrl
     */
    public function __construct(float $priceAmount, string $priceCurrency, string $payCurrency = "", string $ipnCallbackUrl = "",
                                string $orderId = "", string $orderDescription = "", string $successUrl = "", string $cancelUrl = "")
    {
        $this->priceAmount = $priceAmount;
        $this->priceCurrency = $priceCurrency;
        $this->payCurrency = $payCurrency;
        $this->ipnCallbackUrl = $ipnCallbackUrl;
        $this->orderId = $orderId;
        $this->orderDescription = $orderDescription;
        $this->successUrl = $successUrl;
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * @return float
     */
    public function getPriceAmount(): float
    {
        return $this->priceAmount;
    }

    /**
     * @param float $priceAmount
     */
    public function setPriceAmount(float $priceAmount): void
    {
        $this->priceAmount = $priceAmount;
    }

    /**
     * @return string
     */
    public function getPriceCurrency(): string
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     */
    public function setPriceCurrency(string $priceCurrency): void
    {
        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @return string
     */
    public function getPayCurrency(): string
    {
        return $this->payCurrency;
    }

    /**
     * @return bool
     */
    public function isSetPayCurrency(): bool {
        return strlen($this->payCurrency) !== 0;
    }

    /**
     * @param string $payCurrency
     */
    public function setPayCurrency(string $payCurrency): void
    {
        $this->payCurrency = $payCurrency;
    }

    /**
     * @return string
     */
    public function getIpnCallbackUrl(): string
    {
        return $this->ipnCallbackUrl;
    }

    /**
     * @return bool
     */
    public function isSetIpnCallbackUrl(): bool {
        return strlen($this->ipnCallbackUrl) !== 0;
    }

    /**
     * @param string $ipnCallbackUrl
     */
    public function setIpnCallbackUrl(string $ipnCallbackUrl): void
    {
        $this->ipnCallbackUrl = $ipnCallbackUrl;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return bool
     */
    public function isSetOrderId(): bool {
        return strlen($this->orderId) !== 0;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderDescription(): string
    {
        return $this->orderDescription;
    }

    /**
     * @return bool
     */
    public function isSetOrderDescription(): bool {
        return strlen($this->orderDescription) !== 0;
    }

    /**
     * @param string $orderDescription
     */
    public function setOrderDescription(string $orderDescription): void
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * @return string
     */
    public function getSuccessUrl(): string
    {
        return $this->successUrl;
    }

    /**
     * @return bool
     */
    public function isSetSuccessUrl(): bool {
        return strlen($this->successUrl) !== 0;
    }

    /**
     * @param string $successUrl
     */
    public function setSuccessUrl(string $successUrl): void
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @return string
     */
    public function getCancelUrl(): string
    {
        return $this->cancelUrl;
    }

    /**
     * @return bool
     */
    public function isSetCancelUrl(): bool {
        return strlen($this->cancelUrl) !== 0;
    }

    /**
     * @param string $cancelUrl
     */
    public function setCancelUrl(string $cancelUrl): void
    {
        $this->cancelUrl = $cancelUrl;
    }


}
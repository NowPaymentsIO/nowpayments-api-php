<?php


namespace Nowpayments\Template\Response;

class CreatePaymentReturn
{
    private $payment_id;
    private $payment_status;
    private $pay_address;
    private $price_amount;
    private $price_currency;
    private $pay_amount;
    private $pay_currency;
    private $order_id;
    private $order_description;
    private $ipn_callback_url;
    private $created_at;
    private $updated_at;
    private $purchase_id;

    /**
     * CreatePaymentReturn constructor.
     * @param $payment_id
     * @param $payment_status
     * @param $pay_address
     * @param $price_amount
     * @param $price_currency
     * @param $pay_amount
     * @param $pay_currency
     * @param $order_id
     * @param $order_description
     * @param $ipn_callback_url
     * @param $created_at
     * @param $updated_at
     * @param $purchase_id
     */
    public function __construct($payment_id, $payment_status, $pay_address, $price_amount, $price_currency, $pay_amount, $pay_currency, $order_id, $order_description, $ipn_callback_url, $created_at, $updated_at, $purchase_id)
    {
        $this->payment_id = $payment_id;
        $this->payment_status = $payment_status;
        $this->pay_address = $pay_address;
        $this->price_amount = $price_amount;
        $this->price_currency = $price_currency;
        $this->pay_amount = $pay_amount;
        $this->pay_currency = $pay_currency;
        $this->order_id = $order_id;
        $this->order_description = $order_description;
        $this->ipn_callback_url = $ipn_callback_url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->purchase_id = $purchase_id;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @param mixed $payment_id
     */
    public function setPaymentId($payment_id): void
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->payment_status;
    }

    /**
     * @param mixed $payment_status
     */
    public function setPaymentStatus($payment_status): void
    {
        $this->payment_status = $payment_status;
    }

    /**
     * @return mixed
     */
    public function getPayAddress()
    {
        return $this->pay_address;
    }

    /**
     * @param mixed $pay_address
     */
    public function setPayAddress($pay_address): void
    {
        $this->pay_address = $pay_address;
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
     * @return mixed
     */
    public function getPayAmount()
    {
        return $this->pay_amount;
    }

    /**
     * @param mixed $pay_amount
     */
    public function setPayAmount($pay_amount): void
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
     * @param mixed $pay_currency
     */
    public function setPayCurrency($pay_currency): void
    {
        $this->pay_currency = $pay_currency;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getOrderDescription()
    {
        return $this->order_description;
    }

    /**
     * @param mixed $order_description
     */
    public function setOrderDescription($order_description): void
    {
        $this->order_description = $order_description;
    }

    /**
     * @return mixed
     */
    public function getIpnCallbackUrl()
    {
        return $this->ipn_callback_url;
    }

    /**
     * @param mixed $ipn_callback_url
     */
    public function setIpnCallbackUrl($ipn_callback_url): void
    {
        $this->ipn_callback_url = $ipn_callback_url;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getPurchaseId()
    {
        return $this->purchase_id;
    }

    /**
     * @param mixed $purchase_id
     */
    public function setPurchaseId($purchase_id): void
    {
        $this->purchase_id = $purchase_id;
    }
}
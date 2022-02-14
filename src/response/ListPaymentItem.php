<?php


namespace Nowpayments\Template\Response;

class ListPaymentItem
{
    private $payment_id;
    private $payment_status;
    private $pay_address;
    private $price_amount;
    private $price_currency;
    private $pay_amount;
    private $actually_paid;
    private $pay_currency;
    private $order_id;
    private $order_description;
    private $purchase_id;
    private $outcome_amount;
    private $outcome_currency;

    /**
     * InvoicePayment constructor.
     * @param $payment_id
     * @param $payment_status
     * @param $pay_address
     * @param $price_amount
     * @param $price_currency
     * @param $pay_amount
     * @param $actually_paid
     * @param $pay_currency
     * @param $order_id
     * @param $order_description
     */
    public function __construct($payment_id, $payment_status, $pay_address, $price_amount, $price_currency, $pay_amount, $actually_paid, $pay_currency, $order_id, $order_description)
    {
        $this->payment_id = $payment_id;
        $this->payment_status = $payment_status;
        $this->pay_address = $pay_address;
        $this->price_amount = $price_amount;
        $this->price_currency = $price_currency;
        $this->pay_amount = $pay_amount;
        $this->actually_paid = $actually_paid;
        $this->pay_currency = $pay_currency;
        $this->order_id = $order_id;
        $this->order_description = $order_description;
        $this->purchase_id = "";
        $this->outcome_amount = "";
        $this->outcome_currency = "";
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
    public function getActuallyPaid()
    {
        return $this->actually_paid;
    }

    /**
     * @param mixed $actually_paid
     */
    public function setActuallyPaid($actually_paid): void
    {
        $this->actually_paid = $actually_paid;
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

    /**
     * @return mixed
     */
    public function getOutcomeAmount()
    {
        return $this->outcome_amount;
    }

    /**
     * @param mixed $outcome_amount
     */
    public function setOutcomeAmount($outcome_amount): void
    {
        $this->outcome_amount = $outcome_amount;
    }

    /**
     * @return mixed
     */
    public function getOutcomeCurrency()
    {
        return $this->outcome_currency;
    }

    /**
     * @param mixed $outcome_currency
     */
    public function setOutcomeCurrency($outcome_currency): void
    {
        $this->outcome_currency = $outcome_currency;
    }


}
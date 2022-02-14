<?php


namespace Nowpayments\Template\Response;


class InvoiceReturn
{
    private $id;
    private $order_id;
    private $order_description;
    private $price_amount;
    private $price_currency;
    private $pay_currency;
    private $ipn_callback_url;
    private $invoice_url;
    private $success_url;
    private $cancel_url;
    private $created_at;
    private $updated_at;

    /**
     * InvoiceReturn constructor.
     * @param $id
     * @param $order_id
     * @param $order_description
     * @param $price_amount
     * @param $price_currency
     * @param $pay_currency
     * @param $ipn_callback_url
     * @param $invoice_url
     * @param $success_url
     * @param $cancel_url
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($id, $order_id, $order_description, $price_amount, $price_currency, $pay_currency, $ipn_callback_url, $invoice_url, $success_url, $cancel_url, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->order_description = $order_description;
        $this->price_amount = $price_amount;
        $this->price_currency = $price_currency;
        $this->pay_currency = $pay_currency;
        $this->ipn_callback_url = $ipn_callback_url;
        $this->invoice_url = $invoice_url;
        $this->success_url = $success_url;
        $this->cancel_url = $cancel_url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function getInvoiceUrl()
    {
        return $this->invoice_url;
    }

    /**
     * @param mixed $invoice_url
     */
    public function setInvoiceUrl($invoice_url): void
    {
        $this->invoice_url = $invoice_url;
    }

    /**
     * @return mixed
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * @param mixed $success_url
     */
    public function setSuccessUrl($success_url): void
    {
        $this->success_url = $success_url;
    }

    /**
     * @return mixed
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }

    /**
     * @param mixed $cancel_url
     */
    public function setCancelUrl($cancel_url): void
    {
        $this->cancel_url = $cancel_url;
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
}
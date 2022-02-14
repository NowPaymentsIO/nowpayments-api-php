<?php

require ("vendor/autoload.php");

use Nowpayments\Template\NOWPaymentsApi;
use Nowpayments\Template\Currency;
use Nowpayments\Template\Response\CreateInvoice;
use Nowpayments\Template\Response\CreatePayment;
use Nowpayments\Template\Response\GetEstimatePrice;
use Nowpayments\Template\Response\GetListPayments;

$yourClass = new NOWPaymentsApi("YOUR API KEY");

try {
    $invoice = new CreateInvoice(4.0234, Currency::BTC);
    $invoice->setCancelUrl("https://cancel.url");
    $invoiceReturn = $yourClass->createInvoice($invoice);
    var_dump($invoiceReturn);
    var_dump($yourClass->status());
    var_dump($yourClass->getCurrencies());
    var_dump($yourClass->getListPayments());
    var_dump($yourClass->getListPayments(new GetListPayments()));
    var_dump($yourClass->getEstimatePrice(new GetEstimatePrice('3999.5000', 'usd', 'btc')));
    var_dump($yourClass->createPayment(new CreatePayment(3999.5, Currency::BTC, Currency::ADA)));
    var_dump($yourClass->getMinimumPaymentAmount(Currency::BTC, Currency::ADA));
} catch (MyException $e) {
    var_dump($e->getMessage());
}
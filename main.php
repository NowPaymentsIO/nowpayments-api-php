<?php

require('src/NOWPaymentsApi.php');
require('src/Currency.php');
require('src/types/CreateInvoice.php');

use Nowpayments\Template\NOWPaymentsApi;
use Nowpayments\Template\Currency;
use Nowpayments\Template\Response\CreateInvoice;

$yourClass = new NOWPaymentsApi("asdf");
//var_dump($yourClass->status());
//var_dump($yourClass->getCurrencies());

try {
    $invoice = new CreateInvoice(4.0234, Currency::BTC);
    $invoice->setCancelUrl("https://cancel.url");
    $invoiceReturn = $yourClass->createInvoice($invoice);
    var_dump($invoiceReturn);
//    var_dump($yourClass->getListPayments());
//    var_dump($yourClass->createPayment(3999.5, Currency::BTC, Currency::ADA));
//    var_dump($yourClass->getMinimumPaymentAmount(Currency::BTC, Currency::ADA));
} catch (MyException $e) {
    var_dump($e->getMessage());
}

//var_dump(validateDate("2020-01-01"));
//var_dump(validateDate("20-01-01T12:02:40.", "yy-MM-ddTHH:mm:ss.SSSZ"));


//var_dump($yourClass->getEstimatePrice('3999.5000', 'usd', 'btc'));
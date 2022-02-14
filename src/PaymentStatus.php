<?php

namespace Nowpayments\Template;

class PaymentStatus
{
    /**
     * waiting for the customer to send the payment. The initial status of each payment.
     */
    public const WAITING = "waiting";

    /**
     * the transaction is being processed on the blockchain. Appears when NOWPayments detect the funds from the user on the blockchain.
     */
    public const CONFIRMING = 'confirming';

    /**
     * the process is confirmed by the blockchain. Customer’s funds have accumulated enough confirmations.
     */
    public const CONFIRMED = 'confirmed';

    /**
     * the funds are being sent to your personal wallet. We are in the process of sending the funds to you.
     */
    public const SENDING = 'SENDING';

    /**
     * it shows that the customer sent the less than the actual price. Appears when the funds have arrived in your wallet.
     */
    public const PARTIALLY_PAID = 'partially_paid';

    /**
     * the funds have reached your personal address and the payment is finished.
     */
    public const FINISHED = 'finished';

    /**
     * the payment wasn't completed due to the error of some kind.
     */
    public const FAILED = 'failed';

    /**
     * the funds were refunded back to the user.
     */
    public const REFUNDED = 'refunded';

    /**
     * the user didn't send the funds to the specified address in the 24 hour time window.
     */
    public const EXPIRED = 'expired';
}
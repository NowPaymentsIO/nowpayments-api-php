<?php 
/**
 * NOW Payments
 * https://nowpayments.io
 *
 * @see https://github.com/NowPaymentsIO/nowpayments-api-php.git
 * @see https://documenter.getpostman.com/view/7907941/S1a32n38?version=latest#intro
 */

 class NowPaymentsAPI
{
	private $session, $token, $apiVersion;

	const API_PRODUCTION_BASE = 'https://api.nowpayments.io/v1/';
	const API_SANDBOX_BASE    = 'https://api-sandbox.nowpayments.io/v1/';

	function __construct(string $token, bool $sandbox=false) {
		if(empty($token)) {
			throw new Exception('API key is not specified');
		} else {
			$this->token = $token;
		}

		if ($sandbox===true) {
			$this->apiVersion = self::API_SANDBOX_BASE;
		} else {
			$this->apiVersion = self::API_PRODUCTION_BASE;
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

		$this->session = $ch;
	}

	private function Call($method, $endpoint, $data = [], $bearerJWT = '') {
		$ch = $this->session;

		switch ($method) {
			case 'GET':
				$headers[] = 'X-API-KEY: '.$this->token;
				if(!empty($bearerJWT)) {
					$headers[] = 'Authorization: '.$bearerJWT;
				}
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				if(!empty($data)) {
					if(is_array($data)) {
						$parameters = http_build_query($data);
						curl_setopt($ch, CURLOPT_URL, $this->apiVersion.$endpoint.'?'.$parameters);
					} else {
						if($endpoint == 'payment') curl_setopt($ch, CURLOPT_URL, $this->apiVersion.$endpoint.'/'.$data);
					}
				} else {
					curl_setopt($ch, CURLOPT_URL, $this->apiVersion.$endpoint);
				}
				break;

			case 'POST':
				$data = json_encode($data);
				curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-API-KEY: '.$this->token, 'Content-Type: application/json']);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_URL, $this->apiVersion.$endpoint);
				break;

			default:
				break;
		}

		$response = curl_exec($ch);

		return $response;
	}

	public function status() {
		return $this->Call('GET', 'status');
	}

	/**
	 * @param string $list Optional. Accepts 'full', 'available', or empty. Default empty.
	 */
	public function getCurrencies(string $list="") {
		if ( $list=="full" )
			return $this->Call('GET', 'full-currencies');
		elseif ( $list=="available" )
			return $this->Call('GET', 'merchant/coins ');
		else
			return $this->Call('GET', 'currencies');
	}

	/**
	* @param array $params Array of options
	*    $params = [
	*      'amount'				=> (int|float) Required.
	*      'currency_from'		=> (string) Required.
	*      'currency_to'		=> (string) Required.
	*    ]
	*/
	public function getEstimatePrice(array $params) {
		return $this->Call('GET', 'estimate', $params);
	}

	/**
	* @param array $params Array of options
	*    $params = [
	*      'price_amount'			=> (int|float) Required. The fiat equivalent of the price to be paid in crypto.
	*      'price_currency'			=> (string) Required. The fiat currency in which the price_amount is specified (usd, eur, etc)
	*      'pay_currency'			=> (string) Required. The crypto currency in which the pay_amount is specified (btc, eth, etc)
	*      'pay_amount'				=> (int|float) Optional. The amount that users have to pay for the order stated in crypto
	*      'ipn_callback_url'		=> (string) Optional. URL to receive callbacks, should contain "http" or "https", eg. "https://nowpayments.io"
	*      'order_id'				=> (string) Optional. Inner store order ID, e.g. "RGDBP-21314"
	*      'order_description'		=> (string) Optional. Inner store order description, e.g. "Apple Macbook Pro 2019 x 1" 
	*      'purchase_id'			=> (string) Optional. ID of purchase for which you want to create aother payment, only used for several payments for one order
	*      'payout_address'			=> (string) Optional. Usually the funds will go to the address you specify in your Personal account
	*      'payout_currency'		=> (string) Optional. Currency of your external payout_address, required when payout_adress is specified
	*      'payout_extra_id'		=> (string) Optional. Extra ID or memo or tag for external payout_address
	*      'fixed_rate'				=> (bool) Optional. Required for fixed-rate exchanges
	*    ]
	*/
	public function createPayment(array $params) {
		return $this->Call('POST', 'payment', $params);
	}

	/**
	* @param int $paymentID Required. ID of created payment
	*/
	public function getPaymentStatus(int $paymentID) {
		return $this->Call('GET', 'payment', $paymentID);
	}

	/**
	* @param array $params Array of options
	*    $params = [
	*      'currency_from'		=> (string) Required.
	*      'currency_to'		=> (string) Required.
	*      'fiat_equivalent'	=> (string) Optional. Fiat equivalent of the minimum amount.
	*    ]
	*/
	public function getMinimumPaymentAmount(array $params) {
		return $this->Call('GET', 'min-amount', $params);
	}

	/**
	* @param array $params Array of options, all values are required
	*    $params = [
	*      'email'			=> (string) email which you are using for signing in into dashboard
	*      'password'		=> (string) password which you are using for signing in into dashboard
	*    ]
	*/
	public function getBearerJWT(array $params = []) {
		return $this->Call('POST', 'auth', $params);
	}

	/**
	* @param array $params Array of options, all values are optional
	*    $params = [
	*      'limit'			=> (int|string) number of records in one page. (possible values: from 1 to 500)
	*      'page'			=> (int|string) the page number you want to get (possible values: from 0 to page count - 1)
	*      'sortBy'			=> (string) sort the received list by a paramenter. Set to created_at by default (possible values: payment_id, payment_status, pay_address, price_amount, price_currency, pay_amount, actually_paid, pay_currency, order_id, order_description, purchase_id, outcome_amount, outcome_currency)
	*      'orderBy'		=> (string) display the list in ascending or descending order. Set to asc by default (possible values: asc, desc)
	*      'dateFrom'		=> (string) select the displayed period start date (date format: YYYY-MM-DD or yy-MM-ddTHH:mm:ss.SSSZ)
	*      'dateTo'			=> (string) select the displayed period end date (date format: YYYY-MM-DD or yy-MM-ddTHH:mm:ss.SSSZ)
	*    ]
	*/
	public function getListPayments(array $params = [], string $bearerJWT = '') {
		return $this->Call('GET', 'payment', $params, $bearerJWT);
	}

	/**
	* @param array $params Array of options
	*    $params = [
	*      'price_amount'			=> (int|float) Required. The fiat equivalent of the price to be paid in crypto.
	*      'price_currency'			=> (string) Required. The fiat currency in which the price_amount is specified (usd, eur, etc)
	*      'pay_currency'			=> (string) Optional. The crypto currency in which the pay_amount is specified (btc, eth, etc). If not specified, can be chosen on the invoice_url
	*      'ipn_callback_url'		=> (string) Optional. URL to receive callbacks, should contain "http" or "https", eg. "https://nowpayments.io"
	*      'order_id'				=> (string) Optional. Inner store order ID, e.g. "RGDBP-21314"
	*      'order_description'		=> (string) Optional. Inner store order description, e.g. "Apple Macbook Pro 2019 x 1" 
	*      'success_url'			=> (string) Optional. URL where the customer will be redirected after successful payment
	*      'cancel_url'				=> (string) Optional. URL where the customer will be redirected after failed payment
	*    ]
	*/
	public function createInvoice(array $params) {
		return $this->Call('POST', 'invoice', $params);
	}

	function __destruct() {
		curl_close($this->session);
	}
}

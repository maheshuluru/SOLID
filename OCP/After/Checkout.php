<?php
/**
*
*/
class Checkout
{

	public function begin(Receipt $receipt, PaymentMethodInterface $payment)
	{
		$payment->acceptPayment($receipt);
	}
}
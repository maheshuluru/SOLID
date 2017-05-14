<?php
interface PaymentMethodInterface {
	public function acceptPayment($receipt);
}
<?php 
return [
    'Xendit'=>App\PaymentGateway\XenditPayment::class,
    'PayPal'=>App\PaymentGateway\PaypalPayment::class,
    'PeeapPay'=>App\PaymentGateway\PeeapPay::class,
    'Stripe'=>App\PaymentGateway\StripePayment::class,
    'Paystack'=>App\PaymentGateway\PaystackPayment::class,
    'RazorPay'=>App\PaymentGateway\RazorPayPayment::class,
    'MercadoPago'=>App\PaymentGateway\MercadoPagoPayment::class,
    'CcAveune'=>App\PaymentGateway\CcAveunePayment::class,
    'PhonePe'=>App\PaymentGateway\PhonePay::class,

];

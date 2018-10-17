<?php
namespace App;

use URL;
use Config;

use Paypal\Core\PayPalHttpClient;
use Paypal\Core\SandboxEnvironment;
use Paypal\v1\Payments\PaymentCreateRequest;
use Paypal\v1\Payments\PaymentExecuteRequest;

class Paypal {

  public $client, $environment;

  public function __constructor(){
    // credencials from Laravel services
    $clientid = Config::get('services.paypal.clientid');
    $secret = Config::get('services.paypal.secret');
    // setting up the enviroment
    $this->environment = new SandboxEnvironment($clientid,$secret);
    // client
    $this->client = new PayPalHttpClient($this->environment); // production or sandbox
  }

  // request for charge
  public function buildPaymentRequest($amount){
    $request = new PaymentCreateRequest();
    $body = [
      'intent' => 'sale',
      'transactions' => [
        [
          'amount' => ['total' => $amount, 'currency' => 'USD']
        ]
      ],
      'payer' => [
        'payment_method' => 'paypal'
      ],
      'redirect_urls' => [
        'cancel_url' => URL::route('cart'),
        'return_url' => URL::route('payments.completed')
      ]
    ];

    $request->body = $body;
    return $request;
  }

  // authorization
  public function charge($amount){
    return $this->client->execute($this->buildPaymentRequest($amount));
  }

  // executing charge
  public function execute($paymentId, $payerId){
      $paymentExecute = new PaymentExecuteRequest($paymentId);
      $paymentExecute->body = [
        'payer_id' => $payerId
      ];
      return $this->client->execute($paymentExecute);
  }
}

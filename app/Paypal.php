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
        'cancel_url' => '/',
        'return_url' => '/'
      ]
    ];

    $request->body = $body;
    return $request;
  }

  public function charge($amount){
    return $this->client->execute($this->buildPaymentRequest($amount));
  }
  
  // executing charge
}

<?php

namespace App\Endpoints;

use App\Endpoints\Endpoints;
use App\Facades\ApiClient;

class AccountsEndpoint extends Endpoints
{
    public function init()
    {
        $this->api = 'accounts';
    }
    
    public function login($data)
    {
        $response = ApiClient::post($this->api . '/teacher/login', $data);
        
        return $this->response($response);
    }
}

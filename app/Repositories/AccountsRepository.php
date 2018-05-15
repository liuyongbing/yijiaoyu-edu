<?php

namespace App\Repositories;

use App\Endpoints\AccountsEndpoint;
use App\Repositories\Repository;

class AccountsRepository extends Repository
{
    public function init()
    {
        $this->endPoint = new AccountsEndpoint();
    }
    
    public function login($data = [])
    {
        return $this->endPoint->login($data);
    }
}
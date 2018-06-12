<?php

namespace App\Endpoints;

use App\Endpoints\Endpoints;
use App\Facades\ApiClient;

class TeachingsEndpoint extends Endpoints
{
    public function init()
    {
        $this->api = 'teachings';
    }
    
    /**
     * 列表 - 所表
     *
     * @param array $params
     * @return array
     */
    public function all($params)
    {
        $response = ApiClient::get($this->api . '/all', $params);
        
        return $this->response($response);
    }
}

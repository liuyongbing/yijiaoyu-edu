<?php

namespace App\Endpoints;

use App\Endpoints\Endpoints;

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
        //TODO: 实现
        $response = ApiClient::get($this->api . '/all', $params);
        
        return $this->response($response);
    }
}

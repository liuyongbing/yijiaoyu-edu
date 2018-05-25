<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\Repository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public $repository;
    public $route;
    
    public function __construct()
    {
        $this->init();
        
        View::share([
            'STATIC_VERSION' => '?v=' . env('APP_STATIC_VERSION', date('Ymd')),
        ]);
    }
    
    public function init()
    {
        $this->repository = new Repository();
        
        $this->route = '';
    }
    
    /**
     * 列表
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $size = Dictionary::PAGE_SIZE;
        
        $results = $this->repository->list(['status' => 1], $page, $size);
//return $this->response($results);
        return view($this->route . '.list', [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : []
        ]);
    }
    
    /**
     * 查看
     *
     * @param int $id
     */
    public function show($id)
    {
        $item = $this->repository->detail($id);
        
        return view($this->route . '.detail', [
            'route' => $this->route,
            'item' => $item
        ]);
    }
    
    public function response($response)
    {
        return $response;
    }
}

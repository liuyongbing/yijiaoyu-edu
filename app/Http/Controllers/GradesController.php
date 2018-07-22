<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\GradesRepository;

class GradesController extends Controller
{
    const BRAND_ID = 1;
    
    public function init()
    {
        $this->repository = new GradesRepository();
        
        $this->route = 'grades';
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
        $offset = ($page - 1) * $size;
        
        $params = [
            'brand_id' => static::BRAND_ID,
            'status' => 1
        ];
        
        $results = $this->repository->list($params, $offset, $size);
        
        return view($this->route . '.list', [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : []
        ]);
    }
}

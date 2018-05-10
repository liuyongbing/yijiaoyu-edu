<?php

namespace App\Http\Controllers;

use App\Repositories\CoursesRepository;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function init()
    {
        $this->repository = new CoursesRepository();
        
        $this->route = 'courses';
    }
    
    /**
     * 列表
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $params = [
            'grade_id' => $request->input('grade_id', '')
        ];
        $results = $this->repository->all($params);
//return $results;
        return view($this->route . '.list', [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : []
        ]);
    }
    
    /**
     * 课时列表页
     * 
     * @param int $id
     */
    public function class($id)
    {
        $item = $this->repository->detail($id);
        
        return view($this->route . '.class', [
            'route' => $this->route,
            'item' => $item
        ]);
    }
}

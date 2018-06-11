<?php

namespace App\Http\Controllers;

use App\Repositories\CoursesRepository;
use App\Repositories\GradesRepository;
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
            'grade_id' => $request->input('grade_id', ''),
            'status' => 1
        ];
        $results = $this->repository->all($params);
        
        //2018-06-11:没有色带的卡片, 直接去到详情简介页面
        if (!empty($results['list']) && 1 == count($results['list']))
        {
            $id = $results['list'][0]['id'];
            //return redirect()->route($this->route . '.show', ['id' => $id]);
            return $this->show($id);
        }
        
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
        if (!$item['status'])
        {
            return redirect()->route($this->route . '.index');
        }
        
        $repository = new GradesRepository();
        $grade = $repository->detail($item['grade_id']);
        
        return view($this->route . '.detail', [
            'route' => $this->route,
            'item' => $item,
            'grade' => $grade
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
        
        $repository = new GradesRepository();
        $grade = $repository->detail($item['grade_id']);
        
        return view($this->route . '.class', [
            'route' => $this->route,
            'item' => $item,
            'grade' => $grade
        ]);
    }
}

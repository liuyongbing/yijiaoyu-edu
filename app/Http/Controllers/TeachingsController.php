<?php

namespace App\Http\Controllers;

use App\Repositories\TeachingsRepository;
use Illuminate\Http\Request;

class TeachingsController extends Controller
{
    public function init()
    {
        $this->repository = new TeachingsRepository();
        
        $this->route = 'teachings';
    }
    
    public function index(Request $request)
    {
        $courseId = $request->input('course_id');
        $classNumber = $request->input('class_number');
        
        $params = [
            'course_id' => $courseId,
            'class_number' => $classNumber,
            'status' => 1
        ];
        $orderBy = [
            'class_number' => 'asc',
            'sort' => 'asc',
        ];
        $results = $this->repository->all($params, $orderBy);
        
        return view($this->route . '.list', [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : []
        ]);
    }
}

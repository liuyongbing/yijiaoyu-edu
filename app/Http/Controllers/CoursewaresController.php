<?php

namespace App\Http\Controllers;

use App\Repositories\CoursewaresRepository;
use Illuminate\Http\Request;

class CoursewaresController extends Controller
{
    public function init()
    {
        $this->repository = new CoursewaresRepository();
        
        $this->route = 'coursewares';
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
            'class_number' => 'asc'
        ];
        $results = $this->repository->all($params, $orderBy);
        
        return view($this->route . '.list', [
            'route' => $this->route,
            'detail' => isset($results['list'][0]) ? $results['list'][0] : []
        ]);
    }
}

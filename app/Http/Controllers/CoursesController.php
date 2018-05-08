<?php

namespace App\Http\Controllers;

use App\Repositories\CoursesRepository;

class CoursesController extends Controller
{
    public function init()
    {
        $this->repository = new CoursesRepository();
        
        $this->route = 'courses';
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

<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\GradesRepository;
use Illuminate\Http\Request;

class GradesController extends Controller
{
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
        
        $brandId = $request->session()->get('brand_id');
        $params = [
            'brand_id' => $brandId,
            'status' => 1
        ];
        
        $results = $this->repository->list($params, $offset, $size);
        
        switch ($brandId)
        {
            case Dictionary::$teacherTypes['teacher_pocketcat']:
            case 2:
                $view = $this->route . '.list_' . 'pocketcat';
                break;
            case Dictionary::$teacherTypes['teacher_town']:
            case 3:
                $view = $this->route . '.list_' . 'town';
                break;
            default:
                $view = $this->route . '.list';
                break;
        }
        
        return view($view, [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : []
        ]);
    }
}

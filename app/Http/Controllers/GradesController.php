<?php

namespace App\Http\Controllers;

use App\Repositories\GradesRepository;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function init()
    {
        $this->repository = new GradesRepository();
        
        $this->route = 'grades';
    }
}

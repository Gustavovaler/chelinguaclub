<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Curse;
use Illuminate\Http\Request;

class CursosApiController extends Controller
{
    public function index($lang = 'en'){

        $cursos = Curse::all();

        return response()->json($cursos);

    }
}

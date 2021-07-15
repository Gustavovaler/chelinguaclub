<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request){
        $cursos = Curse::all();

        if ($request->ajax()) {
           return response()->json($cursos);
        }
        return view('admin.index', compact('cursos'));
    }

    public function createCourse(){
        return view('admin.courses.create');
    }

    public function storeCourse(Request $request){

        $curso = new Curse();
        $curso->title_es = $request->input('title_es');
        $curso->title = $request->input('title');
        $curso->description = $request->input('description');
        $curso->description_es = $request->input('description_es');
        if ($request->file()) {
           $path = $request->file('img')
                ->storeAs('images', time().$request->file('img')->getClientOriginalName());
            $curso->img = $path;
        }
        $curso->save();


        return redirect('/admin');
    }

    public function deleteCourse($id){

        $curso = Curse::find($id);
        $imagen = $curso->img;
        Storage::delete($imagen);
        $curso->delete();
        return redirect('/admin');
    }
    public function editCourse($id){
        $curso = Curse::find($id);
        return view('admin.courses.edit', compact('curso'));

    }

    public function updateCourse(Request $request, $id){
        $curso = Curse::find($id);
        $curso->title_es = $request->input('title_es');
        $curso->title = $request->input('title');
        $curso->description = $request->input('description');
        $curso->description_es = $request->input('description_es');
        if ($request->file()) {
            //borrar la imagen vieja
            Storage::delete($curso->img);
            $curso->delete();
            //cargar la imagen nueva
            $path = $request->file('img')
                ->storeAs('images', time().$request->file('img')->getClientOriginalName());
            $curso->img = $path;
        }
        $curso->save();

        return redirect('/admin');

    }
}

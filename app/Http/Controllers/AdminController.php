<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use App\Models\Contact;
use App\Models\PricingCard;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $cursos   = Curse::all();
        $pricings = PricingCard::all();
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        $registros = Registration::orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            return response()->json($cursos);
        }
        return view('admin.index', compact('cursos', 'pricings', 'contacts', 'registros'));
    }

    public function createCourse()
    {
        return view('admin.courses.create');
    }

    public function storeCourse(Request $request)
    {

        $curso = new Curse();
        $curso->title_es = $request->input('title_es');
        $curso->title = $request->input('title');
        $curso->description = $request->input('description');
        $curso->description_es = $request->input('description_es');
        if ($request->file()) {
            $path = $request->file('img')
                ->storeAs('images', time() . $request->file('img')->getClientOriginalName());
            $curso->img = $path;
        }
        $curso->save();
        return redirect('/admin');
    }

    public function deleteCourse($id)
    {

        $curso = Curse::find($id);
        $imagen = $curso->img;
        Storage::delete($imagen);
        $curso->delete();
        return redirect('/admin');
    }
    public function editCourse($id)
    {
        $curso = Curse::find($id);
        return view('admin.courses.edit', compact('curso'));
    }

    public function updateCourse(Request $request, $id)
    {
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
                ->storeAs('images', time() . $request->file('img')->getClientOriginalName());
            $curso->img = $path;
        }
        $curso->save();

        return redirect('/admin');
    }

    public function createPricingCard()
    {

        return view('admin.pricing.create');
    }
    public function editPricingCard()
    {
        return;
    }
    public function deletePricingCard()
    {
        return;
    }
    public function storePricingCard(Request $request)
    {
        $pricing = new PricingCard();
        $pricing->price    = $request->input('price');
        $pricing->currency = $request->input('currency');
        $pricing->title   = $request->input('titulo');
        $pricing->item1    = $request->input('item1');
        $pricing->item2    = $request->input('item2');
        $pricing->item3    = $request->input('item3');
        $pricing->item4    = $request->input('item4');
        $pricing->item5    = $request->input('item5');
        $pricing->offer    = $request->input('offer');
        $pricing->footer   = $request->input('footer');
        $pricing->color    = $request->input('color');
        $pricing->lang     = $request->input('lang');
        $pricing->save();
        return redirect('/admin');
    }

    public function updatePricingCard()
    {
        return;
    }
}

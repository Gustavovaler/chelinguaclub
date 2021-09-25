<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $registros = Registration::orderBy('created_at', 'desc')->get();
        return view('admin.registration', compact('registros'));
    }
}

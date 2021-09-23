<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PricingCard;
use Illuminate\Http\Request;

class PricingApiController extends Controller
{
    public function index($lang ='en'){
        $selected_lang = false;
        if ($lang == 'es') {
           $selected_lang = true;
        }

       $pricing_cards =  PricingCard::where('lang', $selected_lang)->get();
       return response()->json($pricing_cards);
    }
}

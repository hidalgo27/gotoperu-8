<?php

namespace App\Http\Controllers\Page\Form;

use App\Http\Controllers\Controller;
use App\Models\TDestino;
use App\Models\TCategoria;

use Illuminate\Http\Request;

class FormpageController extends Controller
{
    public function destinoform(Request $request){
        $destinations = TDestino::where('form', 1)->get();
        $data = [];
        foreach ($destinations as $key => $value) {
            $data[$key] = [
                'id' => $value->id,
                'nombre' => $value->nombre,
            ];
        }
        return response()->json($data);
    }
    public function categoryform(Request $request){
        $category = TCategoria::where('form', 1)->get();
        $data = [];
        foreach ($category as $key => $value) {
            $data[$key] = [
                'id' => $value->id,
                'nombre' => $value->nombre,
            ];
        }
        return response()->json($data);
    }

}

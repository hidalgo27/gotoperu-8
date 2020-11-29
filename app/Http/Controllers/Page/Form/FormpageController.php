<?php

namespace App\Http\Controllers\Page\Form;

use App\Http\Controllers\Controller;
use App\Mail\DesignMailable;
use App\Mail\ResponseMailable;
use App\Models\TDestino;
use App\Models\TCategoria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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

    public function formulario_diseno(Request $request)
    {

        $from = 'info@incasperutours.travel';

        $destination_all = '';
        if ($request->el_destino){
            foreach ($request->el_destino as $destinos){
                if (isset($destinos)){
                    $destination_all.=$destinos.',';
                }
            }
        }

        $category_all = '';
        if ($request->el_category){
            foreach ($request->el_category as $categorias){
                if (isset($categorias)){
                    $category_all.=$categorias.',';
                }
            }
        }

        $travellers_all = '';
        if ($request->el_pasajeros){
            $travellers_all = $request->el_pasajeros;
        }

        $nombre = '';
        if ($request->el_nombre){
            $nombre = $request->el_nombre;
        }

        $email = '';
        if ($request->el_email){
            $email = $request->el_email;
        }

        $telefono = '';
        if ($request->el_telefono){
            $telefono = $request->el_telefono;
        }

        $duration = '';
        if ($request->el_duracion){
            $duration = $request->el_duracion;
        }

        $fecha = '';
        if ($request->el_fecha){
            $fecha = $request->el_fecha;
        }

        $plan = '';
        if ($request->el_plan){
            $plan = $request->el_plan;
        }

        $comentario = '';
        if ($request->el_textarea){
            $comentario = $request->el_textarea;
        }




        $correo = new \stdClass();

        $correo->destinations = $destination_all;
        $correo->category = $category_all;
        $correo->travellers = $travellers_all;
        $correo->name = $nombre;
        $correo->email = $email;
        $correo->telefono = $telefono;
        $correo->duration = $duration;
        $correo->date = $fecha;
        $correo->plan = $plan;
        $correo->comment = $comentario;
        Mail::to('hidalgochponce@gmail.com')->send(new DesignMailable($correo));
        Mail::to($email)->send(new ResponseMailable($correo));  
//        try {
//            Mail::send(['html' => 'notifications.page.client-form-design'], ['nombre' => $nombre], function ($messaje) use ($email, $nombre) {
//                $messaje->to($email, $nombre)
//                    ->subject('Incas Peru Tours')
//                    /*->attach('ruta')*/
//                    ->from('info@incasperutours.travel', 'Incas Peru Tours');
//            });
//            Mail::send(['html' => 'notifications.page.admin-form-contact'], [
//                'category_all' => $category_all,
//                'destination_all' => $destination_all,
//                'travellers_all' => $travellers_all,
//                'duration_all' => $duration_all,
//
//                'nombre' => $nombre,
//                'email' => $email,
//                'fecha' => $fecha,
//                'telefono' => $telefono,
//                'comentario' => $comentario,
//
//            ], function ($messaje) use ($from) {
//                $messaje->to($from, 'Incas Peru Tours')
//                    ->subject('Incas Peru Tours')
////                    ->cc($from2, 'GotoPeru')
//                    /*->attach('ruta')*/
//                    ->from('info@incasperutours.travel', 'Incas Peru Tours');
//            });
//
//            return 'Thank you.';
//        }
//        catch (Exception $e){
//            return $e;
//        }

    }


}

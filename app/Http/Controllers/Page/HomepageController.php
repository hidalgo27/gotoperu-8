<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TPaquete;
use App\Models\TCategoria;
use App\Models\TDestino;
use App\Models\THotel;
use App\Models\THotelDestino;
use App\Models\TPaqueteCategoria;
use App\Models\TPaqueteDestino;
use App\Models\TPaqueteDificultad;
use App\Models\TTeam;
use App\Models\TVideoTestimonio;
use Illuminate\Http\Request;
//use function GuzzleHttp\Promise\all;

class HomepageController extends Controller
{
    public function index(){
        $paquete = TPaquete::with('paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')->get();

        $offer = TPaquete::where('is_p_t', 1)->where('offers_home', 1)->get();

        $testimonio_video = TVideoTestimonio::all()->take(3);

        $categoria = TCategoria::all();
        $destino = TDestino::where('estado', 0)->get();

        $destino_menu = TDestino::all();

        return view('page.index',
            compact(
                'paquete',
                'categoria',
                'destino',
                'destino_menu',
                'offer',
                'testimonio_video'
            ));
    }
    public function detail($url){

        $paquete = TPaquete::where('url', $url)->get();
        $dificultad = TPaqueteDificultad::all();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $destino_menu = TDestino::all();


        return view('page.detail', compact('paquete', 'dificultad', 'paquete_destinos','hoteles','hoteles_destinos','destino_menu'));

    }

    public function load(Request $request){
        $paquetes = TPaquete::with('precio_paquetes')->where('estado',1)->where('is_p_t', 1)->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();
        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

    }

    public function contact(){
        return view('page.contact');
    }

    public function load_all(Request $request){
        $paquetes = TPaquete::with('precio_paquetes')->where('is_p_t', 1)->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();
        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

    }

    public function agregar(Request $request){
        $var = ''; $var2 = ''; $var3 = '';
        if ($request->destinoSelected){
            foreach ($request->destinoSelected as $destinos){
                if (isset($destinos)){
                    $var.=$destinos.',';
                }
            }
        }else{
            $var = 0;
        }

        $nombre2 = explode(',',$var);

        if (($request->categoriaSelected)){
            foreach ($request->categoriaSelected as $categoria){
                if (isset($categoria)){
                    $var2.=$categoria.',';
                }
            }
        }else{
            $var2 = 0;
        }
        $category_arr = explode(',',$var2);

        if (($request->tiempoSelected)){
            foreach ($request->tiempoSelected as $duration){
                if (isset($duration)){
                    $var3.=$duration;
                }
            }
            $duration_e = explode('-', $var3);
            $duration1 = $duration_e[0];
            $duration2 = $duration_e[1];
        }else{
            $var3 = 0;
        }

        if ($var AND $var2 == 0 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->get();
        }

        if ($var == 0 AND $var2 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->whereIn('idcategoria', $category_arr);
                }
            ])->get();
        }

        if ($var == 0 AND $var2 == 0 AND $var3){
            $paquetes = TPaquete::whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var == 0 AND $var2 == 0 AND $var3 == 0){
            $paquetes = 0;
        }

        if ($var AND $var2 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                },
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->get();
        }

        if ($var AND $var2 == 0 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var == 0 AND $var2 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var AND $var2 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                },
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }


//        $paquetes = TPaqueteDestino::with('paquetes','destinos')->whereIn('iddestinos', $nombre2)->get();

        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();


        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

//        return "ok";

//            return Response::json($request->destinosNueva, 200);
//        $nota = new Nota();
//        $nota->nombre = $request->nombre;
//        $nota->descripcion = $request->descripcion;
//        $nota->user_id = auth()->id();
//        $nota->save();
    }

    public function packages(){

        $paquete = TPaquete::with('paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')->where('is_paquete', 1)->get()->sortBy('duracion');

        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        $categoria = TCategoria::where('estado', 1)->get();
        $destino = TDestino::where('estado', 1)->get();

        $paquetes_t = TPaquete::with('precio_paquetes')->where('is_p_t', 0)->get();

        $categoria = TCategoria::where('url', 'luxury')->get();

        foreach ($categoria as $c_s) {
            $categoria_luxury = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_s->id)->get();
        }


        return view('page.packages',
            compact(
                'paquete',
                'categoria',
                'destino',
                'paquete_destinos',
                'paquetes_t',
                'categoria_luxury'
            ));
    }

    public function destination(){

//        $destinos_id = TDestino::with('destino_imagen')->where('nombre', $ciudad)->get();

        $destino_menu = TDestino::all();
        $destino = TDestino::all()->sortBy('nombre');
        return view('page.destinations', compact('destino','destino_menu'));

    }


    public function destination_show($url){
        $destino = TDestino::where('url', $url)->get();
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes', 'paquetes_categoria.categoria')->where('is_p_t', 1)->get();
        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($url) { $query->where('url', $url);}])->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();

        $destinos_all = TDestino::all();

        $ubicacion = \GoogleMaps::load('geocoding')
            ->setParam (['address' =>''.$url.''])
            ->get();
        $ubicacion = json_decode($ubicacion);

        $destino_menu = TDestino::all();

//        dd($ubicacion);

        return view('page.destinations-show', compact('paquetes_de', 'destino', 'paquete', 'paquete_destinos', 'ubicacion', 'destinos_all','destino_menu'));
    }

    public function about(){
        $destino_menu = TDestino::all();
        $team = TTeam::all();
        return view('page.about', compact('destino_menu','team'));

    }

    public function luxury(){

        $categoria = TCategoria::where('url', 'luxury')->get();

        foreach ($categoria as $c_s) {
            $categoria_luxury = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_s->id)->get();
        }

        $destino_menu = TDestino::all();

        return view('page.luxury',compact('destino_menu', 'categoria_luxury','categoria'));
    }

    public function category(){

        $categoria = TCategoria::all()->sortBy('nombre');
        return view('page.packages-category', compact('categoria'));

    }

    public function category_show($url){
        $categoria = TCategoria::where('url', $url)->get();

        foreach ($categoria as $c_s) {
            $categoria_all = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_s->id)->get();
        }

        $all_category = TCategoria::all();

        return view('page.packages-category-show', compact('categoria', 'categoria_all', 'all_category'));

    }

    public function tours(){

        $paquetes = TPaquete::with('precio_paquetes')->where('is_p_t', 0)->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();

        $destino_menu = TDestino::all();

        return view('page.tours',compact('destino_menu', 'paquetes','destinations','category'));

    }

    public function social(){

        return view('page.social');

    }

    public  function review(){
        $testimonio_video = TVideoTestimonio::all();
        return view('page.review', compact('testimonio_video'));
    }

    public function faq(){
        return view('page.faq');

    }


}

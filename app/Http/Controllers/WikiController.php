<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wiki_category;
use App\Wiki_subCategory;
use App\Wiki_file;

class WikiController extends Controller
{
    public function inicio()
    {
        $categorias = Wiki_category::all();
        $subcategorias = Wiki_subCategory::all();
        return view('interfaces.inicio.inicio')
        ->with('categorias',$categorias)
        ->with('subcategorias',$subcategorias);
    }
    public function modal_descarga(Request $request)
    {
        $id_categoria = $request->categoria;
        $id_subcategoria = $request->subcategoria;

        $categoria = Wiki_category::find($id_categoria);
        $subcategoria = Wiki_subCategory::find($id_subcategoria);

        $files = Wiki_file::where('id_category','=',$id_categoria)->where('id_subCategory','=',$id_subcategoria)->get();
        return view('interfaces.inicio.modal_descarga')
        ->with('categoria',$categoria)
        ->with('subcategoria',$subcategoria)
        ->with('files',$files);
    }
}

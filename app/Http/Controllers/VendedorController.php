<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();

        return view("vendedor.index", ["vendedores"=>$vendedores]);
    }

    public function create()
    {
        return view("vendedor.create");
    }

    public function store(Request $request)
    {
        try{
            $vendedor = new Vendedor();

            $vendedor->nome = $request->input("nome");
            $vendedor->email = $request->input("email");
            $vendedor->senha = $request->input("senha");
            $vendedor->dataNascimento = $request->input("dataNascimento");

            $vendedor->save();

            return redirect()->route("vendedor.index");
        } catch(\Exception $e){
            
        }
    }

    public function show(Vendedor $vendedor)
    {
        return view("vendedor.show", ["vendedor"=>$vendedor]);
    }

    public function edit(Vendedor $vendedor)
    {
        return view("vendedor.edit", ["vendedor"=>$vendedor]);
    }

    public function update(Request $request, Vendedor $vendedor)
    {
        try{
            $vendedor->nome = $request->input("nome");
            $vendedor->email = $request->input("email");
            $vendedor->senha = $request->input("senha");
            $vendedor->dataNascimento = $request->input("dataNascimento");

            $vendedor->save();

            return redirect()->route("vendedor.index");
        } catch(\Exception $e){

        }
    }

    public function destroy(Vendedor $vendedor)
    {
        try{
            $vendedor->delete();

            return redirect()->route("vendedor.index");
        } catch(\Exception $e){

        }
    }
}

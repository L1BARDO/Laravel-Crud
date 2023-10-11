<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    public function index()
    {
        $cuentas = Cuenta::paginate(5); // Muestra 5 registros por página
        return view('crud.index', ['cuentas' => $cuentas]);
    }
    public function show(Request $request)
    {
        $search = $request->input('search');

        // Realiza la búsqueda en la base de datos
        $cuentas = Cuenta::where('usuario', 'like', "%$search%")->paginate(5);

        return view('crud.index', ['cuentas' => $cuentas]);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        // Valida y almacena una nueva cuenta en la base de datos.
    }

    public function edit($id)
    {
        $cuenta = Cuenta::find($id);
        return view('crud.edit', ['cuenta' => $cuenta]);
    }

    public function update(Request $request, $id)
    {
        // Valida y actualiza la cuenta en la base de datos.
    }

    public function destroy($id)
    {
        // Elimina una cuenta de la base de datos.
    }
}

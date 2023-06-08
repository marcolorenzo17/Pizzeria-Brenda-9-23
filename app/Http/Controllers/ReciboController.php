<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ReciboController extends Controller
{
    public function __invoke() {
        $recibos = DB::select('select * from recibos order by id');
        return view('recibos', ['recibos' => $recibos]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Recibo::findOrFail($id);

        $delete = $product->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El recibo se ha borrado con éxito.');
            return redirect()->route('recibos.index');
        }

        return abort(500);
    }

    public function actualizar(Request $req, string $id) {
        $product = Recibo::findOrFail($id);

        $product->estado = $req->estado;

        $product->update();

        session()->flash('notif.success', 'Se ha actualizado el estado del pedido con éxito.');
        return redirect()->route('recibos.index');
    }
}

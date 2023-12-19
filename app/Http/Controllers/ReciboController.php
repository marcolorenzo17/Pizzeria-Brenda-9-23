<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ReciboController extends Controller
{
    public function __invoke() {
        $recibos = DB::select('select * from recibos order by id desc');
        return view('recibos', ['recibos' => $recibos]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $recibo = Recibo::findOrFail($id);

        $delete = $recibo->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El recibo se ha borrado con éxito.');
            return redirect()->route('recibos.index');
        }

        return abort(500);
    }

    public function actualizar(Request $req, string $id) {
        $recibo = Recibo::findOrFail($id);

        $recibo->estado = $req->estado;

        $recibo->update();

        session()->flash('notif.success', 'Se ha actualizado el estado del pedido con éxito.');
        return redirect()->route('recibos.index');
    }

    public function pagado(string $id) {
        $recibo = Recibo::findOrFail($id);

        $recibo->pagado = true;

        $recibo->update();

        session()->flash('notif.success', 'El pago del pedido ha sido realizado con éxito.');
        return redirect()->route('recibos.index');
    }

    public function nopagado(string $id) {
        $recibo = Recibo::findOrFail($id);

        $recibo->pagado = false;

        $recibo->update();

        session()->flash('notif.success', 'El pedido ahora está pendiente de cobro.');
        return redirect()->route('recibos.index');
    }

    public function factura(string $id) {
        $data = [
            'numero' => $id
        ];

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('factura', $data);

        return $pdf->stream('archivo2.pdf');
    }
}

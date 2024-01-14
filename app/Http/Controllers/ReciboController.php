<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ReciboController extends Controller
{
    public function __invoke() {
        $user = User::findOrFail(Auth::user()->id);
        $recibos = Recibo::where('created_at', '>', Carbon::now()->subMonths(3))->where('idUser', '=', $user->id)->orderBy('id', 'desc')->paginate(3);
        return view('recibos', ['recibos' => $recibos]);
    }

    public function todosRecibos() {
        $user = User::findOrFail(Auth::user()->id);
        $recibos = Recibo::where('idUser', '=', $user->id)->orderBy('id', 'desc')->paginate(3);
        return view('recibos', ['recibos' => $recibos]);
    }

    public function recibosIndexAdmin() {
        $recibos = Recibo::where('created_at', '>', Carbon::now()->subMonths(3))->orderBy('id', 'desc')->paginate(3);
        return view('recibos', ['recibos' => $recibos]);
    }

    public function todosRecibosAdmin() {
        $recibos = Recibo::orderBy('id', 'desc')->paginate(3);
        return view('recibos', ['recibos' => $recibos]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $recibo = Recibo::findOrFail($id);

        $delete = $recibo->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El recibo se ha borrado con éxito.');
            return redirect()->route('recibos.index.admin');
        }

        return abort(500);
    }

    public function actualizar(Request $req, string $id) {
        $recibo = Recibo::findOrFail($id);

        $recibo->estado = $req->estado;

        $recibo->update();

        session()->flash('notif.success', 'Se ha actualizado el estado del pedido con éxito.');
        return redirect()->route('recibos.index.admin');
    }

    public function pagado(string $id) {
        $recibo = Recibo::findOrFail($id);

        $recibo->pagado = true;

        $recibo->update();

        session()->flash('notif.success', 'El pago del pedido ha sido realizado con éxito.');
        return redirect()->route('recibos.index.admin');
    }

    public function nopagado(string $id) {
        $recibo = Recibo::findOrFail($id);

        $recibo->pagado = false;

        $recibo->update();

        session()->flash('notif.success', 'El pedido ahora está pendiente de cobro.');
        return redirect()->route('recibos.index.admin');
    }

    public function factura(string $id) {
        $data = [
            'recibo' => Recibo::findOrFail($id),
        ];

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('factura', $data);

        return $pdf->stream('factura.pdf');
    }
}

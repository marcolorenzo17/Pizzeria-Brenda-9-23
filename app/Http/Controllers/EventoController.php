<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class EventoController extends Controller
{

    public function index(): Response {
        $user = User::findOrFail(Auth::user()->id);
        if ($user->inmediato) {
            \Cart::clear();
            $user->inmediato = false;
            $user->update();
        }
        $eventos = DB::select('select * from eventos order by id desc');
        $user2 = auth()->user();
        return response()->view('eventos.index', ['eventos' => $eventos, 'intent' => $user2->createSetupIntent()]);
    }

    public function add(Request $req) {
        /*
        $req->validate([
            'personas' => 'required|numeric|min:1|max:100',
            'fecha' => 'required|date',
            'hora' => 'required',

        ]);
        */
        $validate = Validator::make($req->all(), [
            'personas' => 'required|numeric|min:1|max:50',
            'fecha' => 'required|date',
            'hora' => 'required',
        ],[
            'personas.required' => 'El campo es obligatorio.',
            'personas.numeric' => 'El campo debe ser un número.',
            'personas.min' => 'La reserva debe ser al menos para 1 persona.',
            'personas.max' => 'La reserva no puede ser para más de 50 personas.',
            'fecha.required' => 'El campo es obligatorio.',
            'hora.required' => 'El campo es obligatorio.',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $evento = new Evento;
        $evento->idUser = Auth::user()->id;
        $evento->personas = $req->personas;
        $evento->tipo = $req->tipo;
        $evento->fecha = $req->fecha;
        $evento->hora = $req->hora;
        $evento->presupuesto = $req->presupuesto;

        $sinasignar = DB::select('select count(*) from eventos where "idUser" = ' . Auth::user()->id . ' AND "reservado" IS NULL');
        foreach($sinasignar as $sinasig) {
            $sin = $sinasig->count;
        }

        $limite = DB::select('select "personas" from eventos where "fecha" = ' . '\'' . $req->fecha . '\'' . ' AND ("reservado" IS NULL OR "reservado" = ' . '\'' . 'true' . '\'' . ')');
        $lim = 0;
        foreach($limite as $limit) {
            $lim += $limit->personas;
        }

        if ($sin >= 5) {
            session()->flash('notif.success', 'Sólo puedes tener un máximo de 5 reservas activas.');
            return redirect()->route('eventos.index');
        } else if (($lim + $req->personas) >= 50) {
            session()->flash('notif.success', 'Todas las reservas están ocupadas para el día escogido. Por favor, inténtalo de nuevo, o elige otro día.');
            return redirect()->route('eventos.index');
        } else {
            if ($req->ifcredito == "true") {
                $paymentMethod = $req->payment_method;

                $user = auth()->user();
                $user->createOrGetStripeCustomer();

                $paymentMethod = $user->addPaymentMethod($paymentMethod);

                $user->charge(1000, $paymentMethod->id);

                $evento->pagado = true;
            } else {
                $evento->pagado = false;
            };

            $evento->save();

            session()->flash('notif.success', 'Se ha realizado la reserva con éxito.');
            return redirect()->route('eventos.index');
        }
    }

    public function eventosi(string $id) {
        $evento = Evento::findOrFail($id);

        $evento->reservado = "true";

        $evento->update();

        session()->flash('notif.success', 'La reserva ha sido aceptada.');
        return redirect()->route('eventos.index');
    }

    public function eventono(string $id) {
        $evento = Evento::findOrFail($id);

        $evento->reservado = "false";

        $evento->update();

        session()->flash('notif.success', 'La reserva ha sido cancelada.');
        return redirect()->route('eventos.index');
    }

    public function pagado(string $id) {
        $evento = Evento::findOrFail($id);

        $evento->pagado = true;

        $evento->update();

        session()->flash('notif.success', 'El pago de la reserva ha sido realizado con éxito.');
        return redirect()->route('eventos.index');
    }

    public function nopagado(string $id) {
        $evento = Evento::findOrFail($id);

        $evento->pagado = false;

        $evento->update();

        session()->flash('notif.success', 'La reserva ahora está pendiente de cobro.');
        return redirect()->route('eventos.index');
    }
}

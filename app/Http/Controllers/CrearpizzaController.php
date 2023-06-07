<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class CrearpizzaController extends Controller
{
    public function __invoke() {
        $ingredientes = DB::select('select * from ingredientes');
        return view('crearpizza', ['ingredientes' => $ingredientes]);
    }

    public function destroy(string $id): RedirectResponse
    {
        $ingrediente = Ingrediente::findOrFail($id);

        $delete = $ingrediente->delete($id);

        if($delete) {
            session()->flash('notif.success', 'El ingrediente se ha borrado con éxito.');
            return redirect()->route('crearpizza');
        }

        return abort(500);
    }
}

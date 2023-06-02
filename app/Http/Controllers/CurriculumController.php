<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    public function __invoke() {
        return view('curriculum');
    }

    public function add(Request $req) {
        $curriculum = new Curriculum;
        $curriculum->idUser = Auth::user()->id;
        $curriculum->curriculum = $req->curriculum;

        $curriculum->save();

        session()->flash('notif.success', 'Se ha enviado el currículum con éxito.');
        return redirect('/products');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CurriculumController extends Controller
{
    public function __invoke() {
        $curriculums = DB::select('select * from curricula order by id desc');
        return view('curriculum', ['curriculums' => $curriculums]);
    }

    public function add(Request $req) {
        $validate = Validator::make($req->all(), [
            'curriculum' => 'required|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
        ],[
            'curriculum.required' => 'El campo es obligatorio.',
            'curriculum.mimes' => 'El archivo debe estar en formato: jpg, png, jpeg, gif, svg o pdf.'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        /*
        $curriculum = new Curriculum;
        $curriculum->idUser = Auth::user()->id;
        $curriculum->curriculum = $req->curriculum;

        $curriculum->save();
        */

        $image_path = $req->file('curriculum')->store('curriculum', 'public');

        $data = Curriculum::create([
            'idUser' => Auth::user()->id,
            'curriculum' => $image_path,
        ]);

        session()->flash('notif.success', 'Se ha enviado el currículum con éxito.');
        return redirect('/products');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class CurriculumController extends Controller
{
    public function __invoke() {
        $curriculums = DB::select('select * from curricula order by id desc');
        return view('curriculum', ['curriculums' => $curriculums]);
    }

    public function add(Request $req) {
        if ($req->lang_es) {
            $validate = Validator::make($req->all(), [
                'curriculum' => 'required|mimes:jpg,png,jpeg,gif,svg,pdf',
            ],[
                'curriculum.required' => 'El campo es obligatorio.',
                'curriculum.mimes' => 'El archivo debe estar en formato: jpg, png, jpeg, gif, svg o pdf.'
            ]);

            if($validate->fails()){
                // return back()->withErrors($validate->errors())->withInput();
                return response()->json(['errors' => $validate->errors()]);
            }
        } else {
            $validate = Validator::make($req->all(), [
                'curriculum' => 'required|mimes:jpg,png,jpeg,gif,svg,pdf',
            ],[
                'curriculum.required' => 'The field is required.',
                'curriculum.mimes' => 'The file must be in format: jpg, png, jpeg, gif, svg or pdf.'
            ]);

            if($validate->fails()){
                // return back()->withErrors($validate->errors())->withInput();
                return response()->json(['errors' => $validate->errors()]);
            }
        }

        /*
        $curriculum = new Curriculum;
        $curriculum->idUser = Auth::user()->id;
        $curriculum->curriculum = $req->curriculum;

        $curriculum->save();
        */

        $image_path = $req->file('curriculum')->storeOnCloudinary('curriculum');

        $data = Curriculum::create([
            'idUser' => Auth::user()->id,
            'curriculum' => $image_path->getSecurePath(),
            'nuevo' => true,
        ]);

        /*
        session()->flash('notif.success', 'Se ha enviado el currículum con éxito.');
        return redirect('/products');
        */

        if ($req->lang_es) {
            return response()->json(['success' => 'Se ha enviado el currículum con éxito.']);
        } else {
            return response()->json(['success' => 'The resume has been sent successfully.']);
        }
    }

    public function destroy(string $id): RedirectResponse
    {
        $curriculum = Curriculum::findOrFail($id);

        $delete = $curriculum->delete($id);

        if($delete) {
            $fotopdf = $curriculum->curriculum;
            $token = explode('/', $fotopdf);
            $token2 = explode('.', $token[sizeof($token) - 1]);
            Cloudinary::destroy('curriculum/'.$token2[0]);

            session()->flash('notif.success', 'El currículum se ha borrado con éxito.');
            return redirect()->route('curriculum.index');
        }

        return abort(500);
    }
}

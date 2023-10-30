<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function index(): Response
    {
        $promotions = DB::select("select * from products order by id desc");
        $user = User::findOrFail(Auth::user()->id);
        if ($user->inmediato) {
            \Cart::clear();
            $user->inmediato = false;
            $user->update();
        }
        return response()->view('promociones.index', ['promotions' => $promotions]);
    }
}

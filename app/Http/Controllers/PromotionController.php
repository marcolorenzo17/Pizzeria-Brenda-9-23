<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function index(): Response
    {
        $promotions = DB::select("select * from products order by id desc");
        return response()->view('promociones.index', ['promotions' => $promotions]);
    }
}

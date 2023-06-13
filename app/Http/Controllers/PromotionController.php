<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PromotionController extends Controller
{
    public function index(): Response
    {
        return response()->view('promociones.index', [
            'promotions' => Promotion::orderBy('id', 'desc')->get(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Repositories\ProductRepository;
use Carbon\Carbon;


class DashboardController extends Controller
{   
    /**
     * Display the dashboard.
     *
     * @param ProductRepository $productRepository
     * @return \Illuminate\View\View
    */

    public function index()
    {
        $user = Auth::user();

        $userData = (object)[
            'name' => $user->name,
            'lang' => $user->lang ?? 'tr',
            'email' => $user->email,
            'source_lang' => $user->source_lang ?? 'tr',
            'target_lang' => $user->target_lang ?? 'en',
        ];

        return view('dashboard.dashboard', compact('userData'));

    }

}

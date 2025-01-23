<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $articles = DB::table('reports')
            ->where('deleted', false)
            ->orderBy('id', 'DESC')
            ->paginate(5);
        $userStatus = User::select('status')->get();
        return view('home', compact('userStatus', 'articles'));

    }
    public function pdf()
    {
        return view('report');

    }
}
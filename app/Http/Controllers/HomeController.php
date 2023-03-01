<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidatos;


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
    public function index() {

        $Concejo = Candidatos::where('cargo', 'CONCEJO')->where('Grado', auth()->user()->Grado)->get();
        $Personero = Candidatos::where('cargo', 'PERSONERO')->get();
        
        return view('home',[
            'Concejo' => $Concejo,
            'Personero' => $Personero           
        ]);

    }

    
}

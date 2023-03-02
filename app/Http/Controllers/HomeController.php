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

        if(auth()->user()->Grado == '0' || auth()->user()->Grado == '1' || auth()->user()->Grado == '2'){

            $Concejo = Candidatos::where('cargo', 'CONCEJO')->where('Grado', '3')->get();  
            $Grade = "3";          

        }else{
            
            $Concejo = Candidatos::where('cargo', 'CONCEJO')->where('Grado', auth()->user()->Grado)->get();   
            $Grade = auth()->user()->Grado;           
        
        }

        //$Concejo = Candidatos::where('cargo', 'CONCEJO')->where('Grado', auth()->user()->Grado)->get();
        $Personero = Candidatos::where('cargo', 'PERSONERO')->get();
        
        return view('home',[
            'Concejo' => $Concejo,
            'Personero' => $Personero,
            'Grade' => $Grade    
        ]);

    }

    
}

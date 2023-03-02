<?php

namespace App\Http\Controllers\Save;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resultados;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SaveController extends Controller {

    public function SaveConsejo( request $req ){

        $Ped = new Resultados;
        $Ped->idr_student = auth()->user()->id;        
        $Ped->idr_cadidato = $req->Idr; 
        $Ped->save();

        if($Ped->id){

            $Usr = User::find(auth()->user()->id);
            $Usr->voto_con = 'true';
            $Usr->save();
            
            return response()->json([
                'state' => 'OK'
            ]);

        }

    }

    public function SavePerson( request $req ){

        $Ped = new Resultados;
        $Ped->idr_student = auth()->user()->id;        
        $Ped->idr_cadidato = $req->Idr; 
        $Ped->save();

        if($Ped->id){

            $Usr = User::find(auth()->user()->id);
            $Usr->voto_per = 'true';
            $Usr->save();
            
            return response()->json([
                'state' => 'OK'
            ]);

        } 


    }


    public function Closed(Request $req){
        return redirect('/')->with(Auth::logout());    
    } 

    public function Response(Request $req){    

        $Clouds =  DB::table('result')->select('candidatos.cargo', 'candidatos.nombres', 'candidatos.apellidos', 'candidatos.grado', 'candidatos.grupo', 'result.idr_cadidato', DB::raw('COUNT(result.idr_cadidato) AS VOTOS') )
        ->join('candidatos', 'candidatos.id', '=', 'result.idr_cadidato')  
        ->groupBy('result.idr_cadidato')
        ->groupBy('candidatos.nombres')
        ->groupBy('candidatos.apellidos')   
        ->groupBy('candidatos.grado')   
        ->groupBy('candidatos.grupo')   
        ->groupBy('candidatos.cargo')  
        ->orderBy('candidatos.grado', 'DESC')
        ->orderBy('candidatos.grupo', 'DESC')
        ->get();

        return view('Response',[
            'Dats' => $Clouds
        ]);

    }


/*     public function Changed() { 

        $Change = User::where('Grado', '11')->get();
        //$Change->voto_con = 'XXX';
        //$Change->save();
        
        for ($i=0; $i < Count($Change) ; $i++) { 

            $Usr = User::find($Change[$i]->id);
            $Usr->password = Hash::make($Change[$i]->usersto);
            $Usr->save();

        }

        
        
    } */

    

}

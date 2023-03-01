<?php

namespace App\Http\Controllers\Save;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resultados;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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

/*     public function Changed() { 

        $Change = User::where('Grado', '11')->get();
        //$Change->voto_con = 'XXX';
        //$Change->save();
        
        for ($i=0; $i < Count($Change) ; $i++) { 

            $Usr = User::find($Change[$i]->id);
            $Usr->password = Hash::make($Change[$i]->usersto);
            $Usr->save();

        }

        return $Change;
        
    } */

    

}

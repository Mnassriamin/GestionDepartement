<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matiere;
use App\Models\Epreuve;





class TestController extends Controller
{ 
    public function affiche1()        
    {
        
        /*$matieres=Matiere::select()
        ->join('epreuves','epreuves.matiere_id','=','matieres.id')
        ->where('epreuves.id','=',5)->get();*/
       $matieres=Epreuve::where('id', '=',"4")->first()->matieres ;
      
        
         

        
        return view('affres1', ['matieres' => $matieres]);

        
    }   
    public function affiche2()        
    {
        
        /*$results=Epreuve::select()
        ->join('matieres','matieres.id','=','epreuves.matiere_id')
        ->where('matieres.Codemat','=','alg')->get();*/
        $results = Epreuve::whereHas('matieres', fn($query) => $query->where('Codemat', 'vlo'))->get();
        
                

        return view('affres2', ['results' => $results]);
  
    }
}
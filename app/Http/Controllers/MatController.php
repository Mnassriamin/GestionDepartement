<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matiere;



class MatController extends Controller
{
    public function store(){


        
        Matiere::upsert(
            [
                ['Codemat' => 'alg', 'Libelle' => 'algorithmle', 'Coef' => 2],
                
                
            ],
            ['Codemat', 'Libelle','Coef']
            
        );
        return redirect('/matiere');
    }
    public function index()        
    {
        
        
        //$matieres = DB::table('matieres')->get();

        //$matieres = DB::select('select * from matieres');

        $matieres=Matiere::all();


        return view('affMat', ['matieres' => $matieres]);
    }
}
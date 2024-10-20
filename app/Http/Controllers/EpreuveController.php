<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Epreuve;



class EpreuveController extends Controller
{
    public function store(){

       //DB::insert(query: "insert into epreuves (Numero, Date,Lieu) values ('1598','2024-02-03','LFE')");
       //DB::insert(query: "insert into epreuves (Numero, Date,Lieu) values ('2006','2024-02-07','15984')");

       
          /*  DB::table('epreuves')->upsert(
                [
    
                    ['Numero' => '911', 'Date' => '2001-02-19', 'Lieu' => '2001'],
                    
                ],
                ['Numero', 'Date','Lieu']
                
            );  */


            // Elequent 
            Epreuve::upsert(
                [
    
                    ['Numero' => '1584', 'Date' => '2009-02-19', 'Lieu' => 'ISET','matiere_id' => 2],
                    
                ],
                ['Numero', 'Date','Lieu']
                
            );

            return redirect('/epreuve');
    }
    public function index()
    {           
        
        

        //$epreuves = DB::table('epreuves')->get();

        //$epreuves = DB::select('select * from epreuves');


        
        $epreuves= Epreuve::all();

        return view('affEpreuve', ['epreuves' => $epreuves]);
    }
    
    
}

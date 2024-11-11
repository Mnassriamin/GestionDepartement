<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Epreuve;
use Illuminate\Support\Facades\Validator;



class OldEpreuveController extends Controller
{
    public function store(request $request)
    {

        //DB::insert(query: "insert into epreuves (Numero, Date,Lieu) values ('1598','2024-02-03','LFE')");
        //DB::insert(query: "insert into epreuves (Numero, Date,Lieu) values ('2006','2024-02-07','15984')");


        /*  DB::table('epreuves')->upsert(
                [
    
                    ['Numero' => '911', 'Date' => '2001-02-19', 'Lieu' => '2001'],
                    
                ],
                ['Numero', 'Date','Lieu']
                
            );  */


        // Elequent 
        /* Epreuve::upsert(
                [
    
                    ['Numero' => '1584', 'Date' => '2009-02-19', 'Lieu' => 'ISET','matiere_id' => 2],
                    
                ],
                ['Numero', 'Date','Lieu']
                
            );

            return redirect('/epreuve');*/

        $validator = Validator::make($request->all(), [
            'nb' => 'bail|required|numeric',
            'li' => 'bail|required|max:20|alpha',
            'dt' => 'bail|required',
            'mt' => 'bail|required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $ep =new  Epreuve;
        $ep->Numero = $request->input('nb');
        $ep->Date = $request->input('dt');
        $ep->Lieu = $request->input('li');
        $ep->matiere_id = $request->input('mt');
        $ep->save();
        return redirect('/epreuve');
    }
    public function index()
    {

        //$epreuves = DB::table('epreuves')->get();

        //$epreuves = DB::select('select * from epreuves');

        $epreuves = Epreuve::all();

        return view('affEpreuve', ['epreuves' => $epreuves]);
    }
    public function create()
    {
        $matieres = DB::table('matieres')->get();

        return view('formEp', ['matieres' => $matieres]);
    }
}

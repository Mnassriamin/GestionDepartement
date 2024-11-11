<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matiere;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Validator;


class OldMatController extends Controller
{
    public function store(request $request)
    {



        /*Matiere::upsert(
            [
                ['Codemat' => 'alg', 'Libelle' => 'algorithmle', 'Coef' => 2],


            ],
            ['Codemat', 'Libelle','Coef']

        );
        return redirect('/matiere');*/


        $validator = Validator::make($request->all(), [
            'cdm' => 'bail|required|max:5|alpha',
            'lb' => 'bail|required|max:20',
            'cf' => 'bail|required|between:1,5'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $mat = new Matiere();
        $mat->Codemat = $request->cdm;
        $mat->Libelle = $request->lb;
        $mat->Coef = $request->cf;
        $mat->save();
        return redirect('../matieres');
    }
    public function index()
    {


        //$matieres = DB::table('matieres')->get();

        //$matieres = DB::select('select * from matieres');

        $matieres = Matiere::all();


        return view('affMat', ['matieres' => $matieres]);
    }
    public function create()
    {

    }
}

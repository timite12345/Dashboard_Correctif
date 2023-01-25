<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Route ;
use Illuminate\Support\Facades\View as FacadesView;
use View;

class FormController extends Controller
{
    public $database;
    public $ref_tablename;

    public function __construct(Database $database)
    {
       $this->$database = $database;
       $this->ref_tablename ='FormEmploy';
    }

    public function index(Request $request)
    {
        return view('FormEmploy');
    }

    public function FormulEmploy(Request $request)
    {

        $postData=[
            'email'=>$request->email,
            'nom'=>$request->name,
            'prenom'=>$request->prenom,
            'numtel'=>$request->numtel,
            'password'=>$request->password,



        ];
        $postRef = $this->database->getReference($this->ref_tablename)->push($postData);
        if($postRef){
            return redirect('FormEmploy')->with('status','Employé Ajouté avec succès');
        }
        else {
            return redirect('FormEmploy')->with('status','Une erreur est survenue lors de Ajout');

        }

    }

  /*  public function Create(Request $request){
        $data=$request->all();
        $password=Hash::make($request->password);
        $data ['password']= $request->password ;
        $save = User::create($data);
    } */
}

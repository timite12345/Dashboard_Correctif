<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Route ;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    private $database;

public function __construct()
{
    $this->database = \App\Services\FirebaseService::connect();
}
public function create(Request $request)
{
    $this->database
        ->getReference('test/blogs/' . $request['title'])
        ->set([
            'email' => $request['email'] ,
            'name' => $request['name'],
            'prenom' => $request['prenom'],
            'numtel' => $request['numtel'],
            'password' => $request['password'],
        ]);

    return response()->json('blog has been created');
}
public function index()
{
    return response()->json($this->database->getReference('test/blogs')->getValue());
}



    }

  /*  public function Create(Request $request){
        $data=$request->all();
        $password=Hash::make($request->password);
        $data ['password']= $request->password ;
        $save = User::create($data);
    } */


    /*public $database;
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

        } */

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painel\Profissional;



class ProfissionalController extends Controller
{
    private $prof;

    public function __construct(Profissional $prof)
    {
        $this->prof=$prof;
    }

    public function index(Profissional $prof){
       $profissionais = $prof->all();
       return view('index', compact('profissionais'));
    }



    public function teste(){
        $insert=$this->prof->insert([
            'nome' =>'Joel',
            'password'=>'1234',
            'titulo'=>'Full Stack',
            'email'=>'joel@gmail.com',
            'disponibilidade'=>'part-time',
            'skills'=>'react native',

        ]);
        
        if($insert){
            return "Sucesso";
        }else{
            return "ERRO";
        }
    }
}

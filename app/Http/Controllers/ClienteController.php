<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function salvar() {
    
    }
    
    public function listar(){
    // return response()->json(["nome" => "Rafael"], 200);
       return ApiResponse::sucess(data: ["nome" => "Rafael"]);
    }

    public function editar(int $id) {

    }
    
    public function excluir(int $id){

    }
    
    //
}


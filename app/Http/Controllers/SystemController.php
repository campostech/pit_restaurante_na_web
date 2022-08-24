<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SystemController extends Controller
{
    public function create(){
        return view('system');
    }

    public function generate(Request $request){
        return $this->convertTemplate($request)->render();
    }

    public function convertTemplate(Request $request){
        $model = array(
            "name" => "1-Restaurante XPTO",
            "banner" => "2-",
            "email" => "4-minhaempresa@email.com",
            "phone" => "5-(31) 99999-9999",
            "whatsapp" => "6-(31) 99999-9999",
            "address" => "7-Castelo Branco, 423, Matozinhos - MG",
            "maps" => "8-https://maps.google.com/",
            "fundation" => "9-Fundada em 2022",
            "objective" => "10-Buscar sempre agradar os clientes",
            "effort" => "11-Melhorar sempre é o nosso empenho",
            "about" => "0-",
            "products" => [],
            "favicon" => "24-",
            "mainColor" => "#000000",
            "textColor" => "#000000",
            "info" => "5-",
            "hours" => "6-",
            "opinions" => [],
        );

        foreach ($model as $key => $value) {
            $model[$key] = $request->{$key};
        }

        return view('templates.anttnew', $model);
    }
}

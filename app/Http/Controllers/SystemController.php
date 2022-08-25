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
            "name" => "",
            "banner" => "",
            "email" => "",
            "phone" => "",
            "whatsapp" => "",
            "address" => "",
            "maps" => "",
            "fundation" => "",
            "objective" => "",
            "effort" => "",
            "about" => "",
            "products" => [],
            "favicon" => "",
            "mainColor" => "#fff",
            "secondColor" => "#000",
            "info" => "",
            "hours" => "",
            "opinions" => [],
            "categories" => [],
        );

        foreach ($model as $key => $value) {
            if(isset($request->{$key})){
                $model[$key] = $request->{$key};
            }
        }

        if(isset($request->products) && count($request->products) > 1){
            foreach ($request->products as $product) {
                if (!in_array($product["category"], $model["categories"])) { 
                    array_push($model["categories"], $product["category"]);
                }
            }
        }

        return view('templates.anttnew', $model);
    }
}

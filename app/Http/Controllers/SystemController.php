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
        $request["siteData"] = true;
        $download = $this->convertTemplate($request)->render();
        return view("download", compact("download"));
    }

    public function convertTemplate(Request $request){
        $model = array("name" => "", "banner" => "", "email" => "", "phone" => "", "whatsapp" => "", "address" => "", "maps" => "", "fundation" => "", "objective" => "", "effort" => "", "about" => "", "products" => [], "favicon" => "", "mainColor" => "#fff", "secondColor" => "#000", "info" => "", "hours" => "", "opinions" => [], "categories" => [], "siteData" => "");

        foreach ($model as $key => $value) {
            if(isset($request->{$key})){
                $model[$key] = $request->{$key};
            }
        }
        if($model["siteData"]){
            $model["siteData"] = base64_encode(json_encode($model));
        }

        if(isset($request->products) && count($request->products) > 1){
            foreach ($request->products as $product) {
                if (!in_array($product["category"], $model["categories"])) { 
                    array_push($model["categories"], $product["category"]);
                }
            }
        }

        return view('templates.anttnew.index', $model);
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users(Request $request){
        $users=User::all();
        return response()->json($users);

    }
    public function login(Request $request){
        $response = ["status"=>0,"msg"=>""];
        $data=json_decode($request->getContent());
        $user= User::where('email',$data->email)->first();
        if($user){
            //la clase hash es la que nos permite comprobar que el texto del json sin cifrar coincide
            // con los campos cifrados dentro de la base de datos   
            if(Hash::check($data->password,$user->password)){
                //token universal 
                $token=$user->createToken("example");
                $response["status"]=1;
                //guardando el token en texto plano 
                $response["msg"]= $token->plainTextToken;

            }else{
                $response["msg"]="Credenciales incorrectas.";
            }

        }else{
            $response["msg"]="Usuario no encontrado.";
                
        }
        return response()->json($response);



    }

}

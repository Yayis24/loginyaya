<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use Validator;

class Apprenticecontroller extends Controller
{
        public function index()
    {
        $apprendices=Apprentice::get();
        $data=['title'=> 'Registros', 'apprendices'=>$apprendices];
        return view('apprentice.index', $data);
    }

        public function getapprendiceadd(){
        $data=['title'=> 'Agregar Aprendiz'];
        return view('apprentice.add', $data);

        }
        public function postapprendiceadd(Request $request){
            $rules=[
                'name'=>'required|alpha:ascii',
                'document_number'=>'required',
                'city'=>'required',
                'email'=>'required',
                'telephone'=>'required'];

            $message=[

                'name.required'=>'Debe digitar el nombre',
                'name.min'=>'El nombre debe tener minimo 7 letras',
                'name.alpha'=>'El nombre no puede tener numeros o simbolos',
                'document_number.required'=>'Debe digitar el numero de documento',
                'document_number.integer'=>'El numero de documento no puede tener letras o simbolos',
                'document_number.min'=>'El numero de documento debe tener minimo 6 numeros',
                'document_number.max'=>'El numero de documento debe tener maximo 10 numeros',
                'city.required'=>'Debe digitar la ciudad',
                'email.required'=>'Debe digitar el email',
                'telephone.required'=>'Debe digitar el numero de telefono',
                'telephone.integer'=>'El numero telefonico no debe tener letras o simbolos',
                'telephone.size'=>'El numero de telefono debe tener minimo 10 digitos'

            ];

            $validator= Validator::make($request->all(),$rules,$message);
            if($validator->fails()):
                return back()->withInput()->withErrors($validator)->with('message_error','Se ha producido un error');
                else:
                    $a = new Apprentice;
                    $a -> name= $request->input('name');
                    $a -> document_number= $request->input('document_number');
                    $a -> city= $request->input('city');
                    $a -> email= $request->input('email');
                    $a -> telephone= $request->input('telephone');

                    if ($a->save()){
                        return redirect(route('apprentices'))->with('message_confirm','Registro exitoso');
                    }
                endif;

        }
        public function getapprendicedit($id){

            $a = Apprentice::findOrFail($id);
            
            $data=['title'=> 'Modificar Aprendiz', 'apprentice'=>$a];
            return view('apprentice.edit', $data);
            
        }
        public function postapprendicedit(Request $request, $id){

            $a = Apprentice::findOrFail($id);
            $a -> name= $request->input('name');
            $a -> document_number= $request->input('document_number');
            $a -> city= $request->input('city');
            $a -> email= $request->input('email');
            $a -> telephone= $request->input('telephone');

            if ($a->save()){

                $apprendices=Apprentice::get();
                $data=['title'=> 'Aprendices', 'apprendices'=>$apprendices];
                return view('apprentice.index', $data);
            }

        }
        public function getapprendicedelete($id){
            $a = Apprentice::findOrFail($id);
            $a->delete();
            
            $apprendices=Apprentice::get();
                $data=['title'=> 'Aprendices', 'apprendices'=>$apprendices];
                return view('apprentice.index', $data);

            
        }
}

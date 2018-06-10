<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Person;

class TestController extends Controller {

    public function index() {
        $results = Person::all();
        $data = [];
        foreach ($results as $res) {
            $data[$res->id] = $res->name;
        }
        return view('persons', array('data' => $data));
    }

    public function delete($id) {
        $person = \App\Person::find($id);
        $person->delete();
        return redirect('/');
    }

    public function save(Request $request){
        $validate = Validator::make($request->all(),[
            'name'=>'max:4',
        ]);
        if($validate->passes()){
            $person = new Person();
            $person->name = request()->get("name");
            $person->save();
            return response(json_encode(array('success'=>true)),'200');
        }
        else{
            $erros = [];
            foreach($validate->errors()->all() as $error){
                $errors[] = $error;
            }
            return response(json_encode(array('errors'=>$errors)),'400');
        }
    }

    public function update(){
        $person = \App\Person::find(request()->get("item"));
        $person->name = request()->get("name");
        $person->save();
        return redirect('/');
    }

}

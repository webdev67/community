<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Person;

class TestController extends Controller {

    public function index() {
//        $a = new Person();
//        $a->name = "rami";
//        $a->save();
        $a = new Person();
        $results = $a->all();
        $data = [];
        foreach ($results as $res) {
            $data[$res->id] = $res->name;
        }
        return view('persons', array('data' => $data));
    }

    public function delete($id) {
        $person = \App\Person::find($id);
        $person->delete();
        return $this->index();
    }

    public function save(){
        $person = new Person();
        $person->name = request()->get("name");
        $person->save();
        return $this->index();
    }

    public function update(){
        $person = \App\Person::find(request()->get("item"));
        $person->name = request()->get("name");
        $person->save();
        return $this->index();
    }

}

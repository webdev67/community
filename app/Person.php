<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Person extends Model {

    //
    public $timestamps = false;
    private $rules = array(
        'name' => 'max:3',
        'age'=>'numeric|min:5'
    );
    private $errors;

    public function validate($data) {
        $validate = Validator::make($data, $this->rules);
        if($validate->fails()){
            $this->errors = $validate->errors();
            return false;
        }
        return true;
    }

    public function errors(){
        return $this->errors;
    }

}

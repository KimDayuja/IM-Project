<?php

class Author{
    use Model;

    protected $table = "AUTHOR";
    protected $order_column = "au_id";
    protected $allowedColumns = [
        'au_id',
        'au_fname',
        'au_lname',
        'au_birthyear',
    ];

    //sample only, optional
    // public function validate($data){

    //     $this->errors = [];

    //     if(empty($data['email'])){
    //         $this->errors['email'] = 'Email is required';
    //     }else
    //         if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
    //             $this->errors['email'] = 'Email is not valid.';

    //         }
            
    //     if(empty($data['password'])){
    //         $this->errors['password'] = 'Password is required';
    //     }
    //     if(empty($data['terms'])){
    //         $this->errors['terms'] = 'please accept terms.';
    //     }
        
    //     if(empty($this->errors)){
    //         return true;
    //     }
    //     return false;
    // }
}
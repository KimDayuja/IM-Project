<?php

    class Home{

        use Controller;
        
        public function index(){

            $author = new Author;
            $patron = new Patron;
            //where
            // $arr['au_id'] = 1234567;
            // $arr['au_fname'] = 'Abyu';
            // $arr2['au_fname'] = 'Kim';

            // $result = $author->where($arr);

            //insert
            // $arr['au_id'] = 1198754;
            // $arr['au_fname'] = 'Johny';
            // $arr['au_lname'] = 'Syns';
            // $arr['au_birthyear'] = 1987;

            // $author->insert($arr);

            //update
            // $arr['au_fname'] = 'Johnny';
            // // $arr['au_lname'] = 'Brent';
            // $author->update(1198754, $arr, 'au_id');

            //delete
            // $author->delete(1198754, 'au_id');

            //findAll applying patron table
            // $result = $patron->findAll();

            // show($result);

            $this->view('home');
        }
    }

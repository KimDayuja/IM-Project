<?php

class Patron{
    use Model;

    protected $table = "PATRON";
    protected $order_column = "pat_id";
    protected $allowedColumns = [
        'pat_fname',
        'pat_lname',
        'pat_type',
    ];
}
<?php

    if($_SERVER['SERVER_NAME'] == 'localhost'){

        // DATABASE CONFIG
        define('DBNAME', 'Exam1');
        define('DBHOST', 'localhost');
        define('DBUSER', 'postgres');
        define('DBPASS', 'Dayuja9212003');

        define('ROOT', 'http://localhost/mvc/public');
    }else{

        // DATABASE CONFIG
        define('DBNAME', 'Exam1');
        define('DBHOST', 'localhost');
        define('DBUSER', 'postgres');
        define('DBPASSS', 'Dayuja9212003');

        define('ROOT', 'https://www.yourwebsite.com');//if na upload na ang website online change the'yourwebsite'
    }

    define('APP_NAME', "My Website");
    define('APP_DESC', "Best website on the universe.");
    //true means show error, otherwise, false
    define('DEBUG', true);
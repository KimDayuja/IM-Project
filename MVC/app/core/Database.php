<?php

    Trait Database{

        private function connect(){

            // $string = "pgsql:hostname=".DBHOST.";dbname=".DBNAME;
            // $string = "pgsql:hostname=localhost;dbname=Exam1";
            // $con = new PDO($string,"postgres","Dayuja9212003");
            $con = new PDO('pgsql:host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
            return $con;

        }

        public function query($query, $data = []){

            $con = $this->connect();
            $stm = $con->prepare($query);

            foreach ($data as $key => $value) {
                $stm->bindValue(":$key", $value);
            }

            $check = $stm->execute($data);
            if($check){

                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($result) && count($result)){
                    return $result;
                }
            }
            return false;
        }

        public function get_row($query, $data = []){

            $con = $this->connect();
            $stm = $con->prepare($query);

            $check = $stm->execute($data);
            if($check){

                $result = $stm->fetchAll(PDO::FETCH_OBJ);
                if(is_array($result) && count($result)){
                    return $result[0];
                }
            }
            return false;
        }

    }
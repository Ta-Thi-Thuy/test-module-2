<?php
namespace App\model;

class DBConnect{
    protected $dsn ;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=test_module2';
        $this->username = 'root';
        $this->password ='G*[pBm%h[5YnYY$Z';
    }

    public function connect(){
        try {
            return new \PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}
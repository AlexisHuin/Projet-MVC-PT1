<?php
namespace Controller;

use Model\User;
class Home extends Main
{
    public function __construct()
    {
        parent::__construct();
    }
    public function Index()
    {
        $User           = new User();
        $User->nom      = 'RICHARD';
        $User->prenom   = 'Damien';
        $User->Insert();

        echo "bonjour";
    }
    public function Test()
    {
    

       echo "<h1> On est la les reufs </h1>";
    }
}
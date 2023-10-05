<?php
namespace Controller;


class Test extends Main
{
   
    public function Test($params=[])
    {
    

       echo 'On est la les reufs' . $params['id'];
    }
}
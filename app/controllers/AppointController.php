<?php
namespace app\controllers;

require __DIR__ . '/../models/AppointModel.php';
use app\models\AppointModel;

class AppointController{
    private $model;


    public function __construct($db)
    {

        $this->model = new AppointModel($db);
    }
    public function addappoint($data){

    }
    public function showdoctorappoint($id){

    }
    public function showpatiantappoint($id){

    }
    public function appointisempty($appoint){

    }
    public function deleteappoint($id){
        
    }
}


?>
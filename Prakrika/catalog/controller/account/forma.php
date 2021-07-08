<?php

class ControllerAccountForma extends Controller {

    private $error = array();

     public function index() {
        $this->load->model('account/forma');
        $this->Data();
    }

    public function Data() {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $telephone=$_POST['telephone'];
        $res=$this->model_account_forma->InsertData($name,$email,$telephone);
        header("Location: index.php?route=information/information&information_id=7");
    }
}

?>

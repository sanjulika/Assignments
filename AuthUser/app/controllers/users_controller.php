<?php
class UsersController extends AppController{
        var $name = 'Users';
        var $components = array('Auth','Session');
        var $helpers = array('Form');
        /*By default, the AuthComponent expects you to have a table called 'users'
         * with fields called 'username' and 'password' to be used.
         */
        function index(){
                $this->flash('welcome','');
        }
function login(){
     if(!empty($this->data)){
             pr($this->data);
              if($this->Auth->login($this->data)){
                      $this->redirect(array('controller'=>'users','action'=>'index'));
              }
      }
        

}
function logout(){
        $this->redirect($this->Auth->logout());
}
}
?>

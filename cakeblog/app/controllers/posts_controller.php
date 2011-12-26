<?php
class PostsController extends AppController {
    var $name = 'Posts';
    var $helpers = array ('Html','Form');
    //var $scaffold = 'posts';
    function index() {
        $this->set('posts', $this->Post->find('all'));
    }
    function view(){
     }
}
?>

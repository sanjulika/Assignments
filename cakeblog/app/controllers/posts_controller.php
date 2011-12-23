<?php
class PostsController extends AppController {
    var $helpers = array ('Html','Form');
    var $name = 'Posts';
    //var $scaffold = 'posts';
    function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}
?>

<?php
class PostsController extends AppController{
        var $helpers = array('Html','Form','Hyperlink');
        var $name = 'Posts';
        var $components = array('Session');

        function index(){
                $this->set('posts', $this->Post->find('all'));
                
                /*
                 * The line sets the view variable called 'posts' equal to the return value of the
                 * find('all') method of the Post model.
                 * Our Post model is automatically available at $this->Post.
                 */
        }
        
        function view($id){
                
                $this->Post->id = $id;
                $this->set('post', $this->Post->read());
                //read() used to retrieve recod from database.
        }

        function add(){
                if(!empty($this->data)){
                        pr($this->data);
                        if($this->Post->save($this->data)){
                                $this->Session->setFlash('your post have been saved.');
                                $this->redirect(array('action'=>'index'));
                        }
                }
        }
        function delete($id){
                if($this->Post->delete($id)){
                      $this->Session->setFlash('The post of id='.$id.' is deleted.');
                      $this->redirect(array('action'=>'index'));
                }
        }
        function edit($id){
              $this->Post->id=$id;
              if(empty ($this->data)){
                      $this->data = $this->Post->read();
              }else{
                      if($this->Post->save($this->data)){
                              $this->Session->setFlash('the post id= '.$id.' is updated');
                              $this->redirect(array('controller'=>'posts','action'=>'index'));
                      }
              }
        }
}
?>

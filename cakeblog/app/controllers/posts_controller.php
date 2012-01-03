<?php
	class PostsController extends AppController
	{
		var $helpers=array('Html' , 'Form' , 'Hyperlink' , 'Ajax' , 'Javascript');
		var $name='Posts';
		var $components=array('Session');

		function index()
		{
			$this->set( 'posts' , $this->Post->find( 'all' ) );

			/*
* The line sets the view variable called 'posts' equal to the return value of the
* find('all') method of the Post model.
* Our Post model is automatically available at $this->Post.
*/
		}

		function view( $id )
		{

			$this->layout  ='ajax';
			$this->Post->id=$id;
			$this->set( 'post' , $this->Post->read() );
			$this->set( 'title_for_layout' , 'layout' );

			//read() used to retrieve record from database.
		}

		function add()
		{
			//$this->layout  ='ajax';
			if( !empty( $this->data ) ){
				pr( $this->data );
				if( $this->Post->save( $this->data ) ){
					$this->Session->setFlash( 'your post have been saved.' );
					$this->redirect( array('action'=>'index') );
				}
			}
		}

		function delete( $id )
		{
			if( $this->Post->delete( $id ) ){
				$this->Session->setFlash( 'The post of id='.$id.' is deleted.' );
				$this->redirect( array('action'=>'index') );
			}
		}

		function edit( $id )
		{
			$this->Post->id=$id;
			if( empty ( $this->data ) ){
				$this->data=$this->Post->read();
			} else{
				if( $this->Post->save( $this->data ) ){
					$this->Session->setFlash( 'the post id= '.$id.' is updated' );
					$this->redirect( array('controller'=>'posts' ,
					                       'action'    =>'index') );
				}
			}
		}

		function autoComplete()
		{ //Partial strings will come from the autocomplete field as
		   //$this->data['Post']['subject']

			$this->set('posts', $this->Post->find('all', array(
				'conditions' => array(
					'Post.title LIKE' => $this->data['Post']['title'].'%'
				),
				'fields' => array('title')
			)));

			$this->layout = 'ajax';
		}
}

		?>

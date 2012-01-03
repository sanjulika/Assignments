<h1>Add posts</h1>
<div id='div_change'>
<?php
	echo $this->Form->create( 'Post' );
	echo $this->Form->input( 'title' );
	echo $this->Form->input( 'body' , array('rows'=>'3') );
	echo $this->Ajax->submit( 'Submit' , array('url'   =>array('controller'=>'posts' ,
	                                                           'action'    =>'add') ,
	                                           'update'=>'div_change') );
	echo $this->Form->end();
?>
</div>
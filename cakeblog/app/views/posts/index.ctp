<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
    <!-- Here is where we loop through our $posts array, printing out post info -->

<?php
foreach ($posts as $post): 
?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
	   <?php
    echo $this->Html->link($post['Post']['title'], array ('plugin'=>false,'controller' => 'posts', 'action' => 'view', $post['Post']['id']));
    /* use of an object called $this->Html. This is an instance of the CakePHP HtmlHelper class.
     * Note here is that the link() method will generate an HTML link with the given title (the first parameter) and URL (the second parameter).*/
    ?>
       </td>
       <td>
         <?php
         echo $this->Html->link('Delete',array('controller'=>'posts','action'=>'delete',$post['Post']['id']),null,'Are you sure?');
         echo "   ";
         echo $this->Html->link('Edit',array('controller'=>'posts','action'=>'edit',$post['Post']['id']));
         ?>
       </td>
        <td><?php echo $post['Post']['created']; ?></td>
    <td> <?php
    echo $post['Post']['modified'];
    ?></td>
    </tr>

<?php
 endforeach; 
?>
</table>
  <?php

    //echo $this->Html->link('View',array('controller'=>'posts','action'=>'view'));
    echo $this->Html->link('Add Post into database',array('controller'=>'posts','action'=>'add'));
     ?>


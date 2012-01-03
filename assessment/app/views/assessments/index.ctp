<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
</head>
<body>
<?php
//pr($assessments);
//pr($user_id);
echo '<p align="center">welcome '.$user_id.'</p>';
echo $this->Html->link('Logout',array('controller'=>'users','action'=>'logout'));
echo '<br/>';
echo $this->Html->link('Add Questions',array('controller'=>'questions','action'=>'index'));
?>
<br/>
    <table>
    <tr>
    <th>id</th><th>Topic</th><th>Description</th><th>Action</th>
    </tr>
<?php
    foreach ($assessments as $assessment):
?>
    <tr>
        <td>
            <?php
                echo $assessment['Assessment']['id'];
            ?>
        </td>
        <td>
            <?php
                echo $assessment['Assessment']['topic'];
            ?>
        </td>
        <td>
            <?php
                echo $assessment['Assessment']['description'];
            ?>
        </td>
        <td class="action">
            <?php
            /*echo $this->Html->link('View',array('action'=>'view',$assessment['Assessment']['id']));
            echo '  ';
            echo $this->Html->link('Edit',array('action'=>'edit',$assessment['Assessment']['id']));
            echo '  ';
            echo $this->Html->link('Delete',array('action'=>'delete',$assessment['Assessment']['id']));
            echo '  ';*/
            echo $this->Html->link('Give Test',array('controller'=>'questions','action'=>'view',$assessment['Assessment']['id'],0));
            //echo $this->Html->link('Give Test',array('controller'=>'questions','action'=>'view',$assessment['Assessment']['id']));
            ?>
        </td>
    </tr>
<?php   endforeach;?>
    </table>
<hr>
<?php
echo $this->Html->link('Add new assessment',array('controller'=>'assessments','action'=>'add'));
?>
</body>
</html>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
            <h1>Add posts</h1>
            <form id="PostAddForm" method="post" action="/posts/add">
        <?php
        echo $this->Form->create('Post');
        echo $this->Form->input('title');
        echo $this->Form->input('body',array('rows'=>'3'));
        echo $this->Form->end('Save Post');
        ?>
            </form>
    </body>
</html>

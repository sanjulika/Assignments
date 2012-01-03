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
            <h1>User Authentication</h1>
        <?php
       echo $this->Session->flash('auth');
       echo $this->Form->create('User');
       /*By specifying a model for a form, you are creating that form's context.
        *All fields are assumed to belong to this model (unless otherwise specified),
        *and all models referenced are assumed to be associated with it.*/
       echo $this->Form->input('username');
       echo $this->Form->input('password');
       echo $this->Form->end('Login');
        ?>
    </body>
</html>

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Post<?php echo $post['Post']['title']; ?></title>
    </head>
  <body>
          <h1>Information about the Posts</h1>
          <h3><?php echo $post['Post']['title']; ?></h3>
          <p><small>Created on: <?php echo $post['Post']['created']; ?></small></p>
          <p><b><?php echo $post['Post']['body']; ?></b></p>
  </body>
</html>

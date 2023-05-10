<?php
require_once('connection.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    
<!--Custom Style     -->
<link rel="stylesheet" href="styles.php">
<link rel="stylesheet" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
    <div class="navv">
        <ul class=" nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="index.html">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="project_blog.php?dep= ">PROJECTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">ABOUT</a>
    </li>
  <li class="nav-item">
      <a class="nav-link" href="login.html">UPLOAD PROJECT</a>
    </li>
    
  </ul>
</div>
<br><br>
<div class="project">
<?php
          $row = $result = $title = $image = $id = $count = $tr_name = $sql = "";
          $blog= $_GET['blog'];
          $sql = "SELECT * FROM `project_info`, `teachers` WHERE project_info.tr_reg=teachers.tr_id and project_id='".$blog."';";
          $sql1 = "SELECT * FROM `project_info`, `teachers` WHERE project_id='".$blog."';";

          $result = mysqli_query($con, $sql);
          
          $row = mysqli_fetch_assoc($result);
            $img = "images/". $row['img'];
            $img1 = "images/". $row['img1'];
            $title = $row['project_name'];
            $text = $row['project_des'];
            $tr_name = $row['tr_name'];
            $contact = $row['email_id'];
            $coll = $row['college'];
?>
    <h1 style="text-align: center;"><?php echo $title;?></h1>
    <p><?php echo $text;?></p>
    <img src="<?php echo $img ?>" width="250px" height="250px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="<?php echo $img1 ?>" width="250px" height="250px">
    <p>College: <?php echo $coll;?></p>
    <p>Professor Name: <?php echo $tr_name;?></p>
    <p>Email id:<?php echo $contact;?></p>
    <?php// } ?>
</div>
    
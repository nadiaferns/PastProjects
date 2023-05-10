<?php
require_once('connection.php');
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script>
</script>
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
      <a class="nav-link active" href="#">PROJECTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">ABOUT</a>
    </li>
  <li class="nav-item">
      <a class="nav-link" href="login.html">UPLOAD PROJECT</a>
    </li>
    
  </ul>
</div>
<div class="blogs">
      <!-- Blog div -->
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1 align="center">Projects</h1>
          </div>
        </div>
        <nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex" role="search" method="POST"><!--action="project_blog.php"-->
      <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" id="btn_search" type="submit">Search</button>
    </form>
  </div>
  <div class="card-body">
    <div class="list-group list-group-list-action" id="content">
	             <!--from data base-->
	    
	</div>
  </div>
</nav>

  <?php /*
      $word = "";
      if($_POST){
      $search = $_POST['search'];
      $sql1="select * from project_info where project_name like %".$search."% or project_des like %".$search."% ";
      $result1 = mysqli_query($con,$sql1);
      if(mysqli_num_rows($result1)>0){
        while($row1= mysqli_fetch_assoc($result1)){
          echo "<p>";
          echo $row1[project_name];
          echo "</p>";
        }
      }
      else{
        echo"There are no matches";
      }
    }*/
    ?>
    <div class="gallery">
    <!-- Blog div -->
    <div class="container">
      <div class="row my-2 g-2">
        <?php
        $row = $result = $title = $image = $id = $count = $sql2 = $sql = $i = $dep = "";
        $dep = $_GET['dep'];
        if($dep){
          $sql = "select * from project_info p, teachers t where p.tr_reg=t.tr_id and t.department='".$dep."';";
        }
        else{
          $sql = "select * from project_info;";
        }

        $result = mysqli_query($con, $sql);
        if($result->num_rows > 0){
        while( $row = mysqli_fetch_assoc($result) ){
          $image = "images/". $row['img'];
          $name = $row['project_name']; 
        ?>
        <div class="col-md-4">
          <div class="blog">
          <a href="project.php?blog=<?php echo $row['project_id'] ?>">
            <article> 
            <h3 class="blogg"> <?php echo $name ?></h3>
              <figure> <img src="<?php echo $image ?>" alt=""> </figure>
            </article> 
          </a>
        </div>
        </div>
        <?php } } ?>
      </div>
      <br id="A">
    </div>
  </div>   
    <script src="JS/jQuery.js"></script>
	<script src="JS/main.js"></script>

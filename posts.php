


    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POSTS PHP</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="pages.php">Pages</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
       
        </div><!--/.nav-collapse -->
      </div>
    </nav>




<!-- **************************************** -->






    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD PHP</title>
    <!-- Bootstrap core CSS -->

    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    <style>
    
  

 </style>

    <?php 

    error_reporting(0);

    include 'connection.php';
        $name = $_POST['user'];
        $email = $_POST['mail'];
        $password = $_POST['pass'];

    $sql = "INSERT into ba(fname,email,pass)Values('$name','$email','$password')";

        if ($_POST['submit']){
            if(mysqli_query($conn, $sql)){

                echo "Data added successfully";
            }else
                {
                    echo "Data NOT added";
                }

        }
    ?>


  </head>
  <body>

<form action="add.php" method="post">
    <label>Text User</label>
    <input type="text" name="user" placeholder="user">
    <br>
    <label>Email User</label>
     <input type="mail" name="mail" placeholder="email">
     <br>
     <label>Password User</label>
      <input type="password" name="pass" placeholder="password">
      <br><br>
       <input type="submit" name="submit" value="Send info">

</form>


    
  </body>
</html>


<!-- *********************************************************** -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map"> </script>
<script src="https://cdn.jsdelivrhttps://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>












    
  </body>
</html>



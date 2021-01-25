


    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGES PHP</title>
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Brad</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

            <form action="insert_code.php" method="POST">
            <div class="mb-3">
                <label >First Name</label>
                <input type="text" class="form-control" name="fname" placeholder=" Enter First Name">
            </div>
            <div class="mb-3">
                <label >Last Name</label>
                <input type="text" class="form-control" name="lname" placeholder=" Enter Last Name">
            </div>
            <div class="mb-3 form-check">
              <label >Enter Course</label>
                <input type="text" class="form-control" name="course" placeholder=" Enter Course">
              
            </div>
              <div class="mb-3 form-check">
              <label >Enter Phone number</label>
                <input type="text" class="form-control" name="contact" placeholder=" Enter phone number">
            </div>
           
     </div>
              <div class="modal-footer">
             <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary" name="insertdata">Save Data</button>
            </div>

            </form>
     
      </div>
    
    </div>
  </div>


<div class="container" >
    <div class="content">
        
            
                <h2>PHP CRUD PHP DISPLAY</h2>
            
                <hr> 
                <textarea  style="width:25em; height:25em" >  </textarea>
                <br>
                <hr> 

     

        

         

    </table>
            
            </div>
            
    
    </div> 


</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map"> </script>
<script src="https://cdn.jsdelivrhttps://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>












    
  </body>
</html>
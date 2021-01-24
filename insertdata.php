<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<title>InsertData</title>
<style>

</style>
</head>
<body>

    <div class="container" > 
        <div class="content">
            <h2> ADD DATA </h2>
            <hr>
        <form method="post" action="" > 
            <div class="form-group">
                <label for="">First Name </label>
                <input type="text" name="fname" placeholder="Enter First Name" class="form-control" required>
        
            </div>
             <div class="form-group">
                <label for="">Last Name </label>
                <input type="text" name="lname" placeholder="Enter Last Name" class="form-control" required>
        
            </div>
             <div class="form-group">
                <label for="">Course </label>
                <input type="text" name="course" placeholder="Enter Course" class="form-control" required>
        
            </div>
                  <div class="form-group">
                <label for="">Contact </label>
                <input type="text" name="contact" placeholder="Enter Contact" class="form-control" required>
        
            </div>
<hr>
            <button name="insert" type="submit" class="btn btn-primary"> SAVE DATA </button>
        
            <a href="index.php" class="btn btn-danger" >BACK</a>
        
        </form>
        </div>

    
    </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map"> </script>
<script src="https://cdn.jsdelivrhttps://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>



<?php



  $connection = mysqli_connect("localhost","root","mysql","phpcrud");
 $db = mysqli_select_db($connection,'phpcrud');

 if (isset($_POST['insert']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];
$contact = $_POST['contact'];
$query = "INSERT INTO students (`fname`,`lname`,`course`,`contact`)VALUES('$fname','$lname','$course','$contact')";

$query_run = mysqli_query($connection, $query);

if($query_run){

    echo '<script> alert("DATA SAVED"); </script>'; 
}else {

echo '<script> alert("DATA  NOT SAVED"); </script>'; 

}


}





?>
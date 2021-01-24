<?php

    $connection = mysqli_connect("localhost","root","mysql","phpcrud");
            $db = mysqli_select_db($connection,'phpcrud');


         if(isset($_POST['delete'])){


            $id = $_POST['id'];

            $query = "DELETE FROM students WHERE id ='$id' ";

            $query_run = mysqli_query($connection, $query);

            if($query_run)
            {

            echo '<script> alert("DATA  DELETED"); </script>';
            header("location: index.php"); 
            }
            else{


                echo '<script> alert("DATA  NOT DELETED"); </script>'; 
            }


         }


?>
<?php
    require('includes/connection.php');
    $st_no= $_POST['st_no'];
    echo $st_no;
    $query= "SELECT * FROM data WHERE st_no=".$st_no." ";
    $query_select= mysqli_query($con,$query);
    if($query_select)
    {
        while($query_detail= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
              {
                  echo $query_detail['name'];
              }
    }
    else
    {
        echo "error";
        echo mysqli_error($con);
        die();
    }
    

?>
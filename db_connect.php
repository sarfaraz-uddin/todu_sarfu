 <?php   
    $conn=new mysqli("localhost:3307","root","","todu_list");
    if($conn->connect_error) {
        die($conn->connect_error);
    }
 
?> 
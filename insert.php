<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Insert Page page</title> 
</head> 
  
<body> 
    <center> 
        <?php 
  
        // servername => localhost 
        // username => root 
        // password => empty 
        // database name => staff 
        $conn = mysqli_connect("localhost", "root", "", "staff"); 
          
        // Check connection 
        if($conn === false){ 
            die("ERROR: Could not connect. " 
                . mysqli_connect_error()); 
        } 
          
        // Taking all 5 values from the form data(input) 
        $your_name =  $_REQUEST['your_name']; 
        $your_phone = $_REQUEST['your_phone']; 
        $your_email =  $_REQUEST['your_email']; 
        $your_city = $_REQUEST['your_city']; 
        //$email = $_REQUEST['email']; 
          
        // Performing insert query execution 
        // here our table name is college 
        $sql = "INSERT INTO college  VALUES ('$your_name',  
            '$your_phone','$your_email','$your_city')"; 
          
        if(mysqli_query($conn, $sql)){ 
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>";  
  
            echo nl2br("\n$your_name\n $your_phone\n "
                . "$your_email\n $your_city"); 
        } else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
          
        // Close connection 
        mysqli_close($conn); 
        ?> 
    </center> 
</body> 
  
</html> 
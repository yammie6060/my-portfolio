<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
        <meta name= "viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body >
        

               <?php
               $servername="localhost";
               $username="root";
               $password="";
               $Db="my_db";
               $connect=mysqli_connect($servername,$username,$password,"$Db");
               if($connect){
                echo "<b>"."Connection successful <br> <br>";
               }
               else{
                echo"Connection failed";
               }
               $query="SELECT * FROM contact;";
               $result=mysqli_query($connect,$query);
             
                while($row=mysqli_fetch_assoc($result)){
                    echo "<b>". "Id Number:"." ".$row["Id"]."<br>"."Name:"." ".$row["Name"]."<br>"."Phone Number:"." ".$row["Phone_Number"]."<br>"."Email Address:"." ".$row["Email_Address"];
                }
              
               ?>

    </body>
</html>

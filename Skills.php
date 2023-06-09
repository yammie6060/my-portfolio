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
                echo "<b> Connection successful <br> <br>";
               }
               else{
                echo"Connection failed";
               }
               $query="SELECT * FROM skills;";
               $result=mysqli_query($connect,$query);
               $results=mysqli_num_rows($result);
               if($results>0)
                while($row=mysqli_fetch_assoc($result)){
                    echo " "."Id Number:"." ".$row["Id"]."<br>"."Skill 1:"." ".$row["Skills"]."<br>"."Experience:"." ".$row["Experience"]."<br><br>";
                }
              
               ?>

    </body>
</html>
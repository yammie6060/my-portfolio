<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
        <meta name= "viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body background="gradient.png" style="color: gainsboro;">
        <div class="name">
              
            <ul>
                <li><a href="Greetings.html">Home</a></li>
                <li><a href="My Portfolio.html">About</a></li>
                <li><a href="Skills.html">Skills</a></li>
                <li><a href="contact2.html">Contact</a></li>
                <li><a href="Project.html">Project</a></li>
            </ul>  <hr>
        </div>

        <h1>Contact Us</h1>

        <p style="font-size:24px">Together we can do much. <b style="color:darkblue">Lets talk</b>.</p><hr>
        <br>
        <br>
        <p><b>Email: </b> yamikanisuwedi6@gmail.com</p>
        <br>
        <br>
        <p><b>Phone Number:</b> +265 881052965</p>
        <br>
        <br>
        <P><b>WhatsApp Number:</b> +265 989112582</P>
        <div class="footer">
            <footer><a href="https://www.google.com/search?q=whatsapp+login"><img src="whatsapp.png" alt="whatsapp png"width="30"></a>
      
               <a href="https://www.google.com/search?q=instagram+login"><img src="instagram.png" alt="instagram png"width="30"></a>
                
                 <a href="https://www.google.com/search?q=facebook+login"><img src="Live Fb.png" alt="facebook png"width="50"></a>
         
                 <a href="https://www.google.com/search?q=email+login"><img src="email.png" alt="email png"width="30"></a>
         
                 <a href="https://www.google.com/search?q=twitter+login"><img src="Twitter.png" alt="twitter png"width="30"></a>
                <br>
                <br></footer>
               </div> 
               <?php
               $servername="localhost";
               $username="root";
               $password="";
               $Db="my_db";
               $connect=mysqli_connect($servername,$username,$password,"$my_db");
               if($connect){
                echo"Connection successful";
               }
               else{
                echo"Connection failed";
               }
               
               ?>

    </body>
</html>
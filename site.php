
<?php
  if(isset($_POST['signup'])){
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Username=$_POST['Username'];
    $email=$_POST['Email'];
    $password=$_POST['password'];
    $fruits = $_POST["fruits"];
  }


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
        <link rel="stylesheet" href="project2.css">
        <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Odibee+Sans|Raleway:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,500,600,700|Odibee+Sans|Raleway:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,500,600,700|Exo+2:400,700|Odibee+Sans|Raleway:400,700&display=swap" rel="stylesheet">
    </head>
<body>





    <div class="Signup">
        <img src="vn.png" class="img">
    <p>Create your account</p><br>
    <form action="site.php" method="post" >
    <input type="text" name="Fname" placeholder="Fname" class="inp" >
    <input type="text" name="Lname" placeholder="Lname" class="inp">  <br>
    <input type="text" name="Username" placeholder="Username" class="inp"><br>
    <input type="email" name="email" placeholder="Email" class="inp" style="width: 340px; "><br>
    <input type="password" name="password" placeholder="Password" class="inp" id="pass"> <img src="show.JPG" onclick="myFunction()" style="width: 40px;"><br>
    Apple:<input type="checkbox" name="fruits[]" value="apples" class="inp"><br>
    Orange:<input type="checkbox" name="fruits[]" value="oranges" class="inp"><br>
    Peach:<input type="checkbox" name="fruits[]" value="peach" class="inp"><br>
    <a href="project1.html">Already Registered?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Sign up" id="button" name='signup'> <br>
    </form>


    </div>

    <?php  
    $fruits = $_POST["fruits"];
    echo $fruits;


    ?>




    <script>
        function myFunction() {
          var x = document.getElementById("pass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>



</body>
</html>

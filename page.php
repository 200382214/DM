<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS3mZ1NRp5H5gcuR6Yx0CEpk-ZEQm0VXM6Ga_KZSFhl7DfW6gyvQ" type="image/jpg">
    <title>Dhvanit24</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- ekko lightbox-->
    <link rel="stylesheet" href="css/ekko-lightbox.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">

<div class= "card bg animated fadeIn">

  <span class="ty strokelight animated zoomIn">Thank you</span></br>
  <br/>
  <svg id= "sunglasses" class= "animated rollIn" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path d="M 63.624,32.186 C 63.624,49.758 49.384,64 31.812,64 14.24,64 0,49.758 0,32.186 0,14.616 14.24,0.374 31.812,0.374 c 17.572,0 31.812,14.241 31.812,31.812" fill="#fbbf67"/><g transform="matrix(1 0 0 1 0 .504)" fill="#25333a"><path d="m4.389 19c.619 0 21.68 0 24.912 0 1.322 0 1.817 3.279 1.016 5.246-7.289 18-19.654 18-26.945 0-.8-1.966-.301-5.246 1.017-5.246"/><path d="m34.632 19.04c.618 0 21.586 0 24.804 0 1.314 0 1.81 3.267 1.01 5.224-7.256 17.922-19.562 17.922-26.824 0-.794-1.957-.301-5.224 1.01-5.224"/></g><g transform="matrix(1 0 0 1 0 .504)" fill="#56717f"><path d="m37.16 21.943c0 1.187-.932 2.143-2.073 2.143h-6.267c-1.137 0-2.067-.957-2.067-2.143 0-1.183.93-2.144 2.067-2.144h6.267c1.141 0 2.073.961 2.073 2.144"/><path d="m59 22.752c.44.617-.684 2.244-2.507 3.637l-9.982 7.623c-1.823 1.389-3.652 2.02-4.093 1.4-.438-.61.683-2.241 2.508-3.63l9.982-7.625c1.823-1.389 3.654-2.02 4.092-1.405"/><path d="m49.36 19.938c.219.307-.346 1.124-1.257 1.819l-4.988 3.812c-.916.694-1.829 1.01-2.05.702-.22-.305.34-1.124 1.256-1.819l4.988-3.81c.912-.696 1.832-1.012 2.051-.704"/><path d="m23.68 21.291c.387.546-.609 1.99-2.222 3.226l-8.867 6.768c-1.619 1.232-3.244 1.792-3.631 1.244-.393-.542.603-1.988 2.224-3.226l8.863-6.766c1.616-1.235 3.245-1.793 3.633-1.246"/><path d="m22.482 28.377c.19.273-.303.994-1.112 1.613l-4.427 3.383c-.812.617-1.628.897-1.819.625-.196-.271.301-.998 1.11-1.615l4.432-3.381c.806-.619 1.624-.898 1.816-.625"/></g><path d="m44.37 44.55c-.621 0-1.241 0-1.862 0-.095 0-.161.036-.248.05-.094.014-.185.018-.278.057-.161.059-.291.153-.405.262-.023.021-.055.025-.078.051-4.487 4.373-10.366 5.371-15.965 2.491-3.01-1.546-2.759-2.91-5.977-2.91-1.316 0-1.808 1.527-1.014 2.44 7.262 8.377 19.577 8.377 26.837 0 .794-.914.307-2.441-1.01-2.441" fill="#633d19"/></svg></br></br></br>
<p class="note animated fadeIn">You rock!</p><p class="note animated fadeIn"><a href = "index.html"><center>BACK TO HOME</center></a></p></div>


<?php
$firstname = $_POST['firstname'] ;
$lastname = $_POST['lastname'];
$email =$_POST['email'];
$comments =$_POST['comments'];


$dbc = mysqli_connect('127.0.0.1:56219','azure','6#vWHD_$','localdb') or die ('Error connecting to MySQL');
$query = "INSERT INTO myform (firstname, lastname, email, comments)" . "VALUES ('$firstname','$lastname','$email','$comments')";
 //run
$result = mysqli_query($dbc, $query)  or die ("ERROR");
//close
mysqli_close($dbc);

 ?>

</body>
</html>

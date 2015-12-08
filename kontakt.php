<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial.scale=1">
    <link rel="stylesheet" href="css/cssreset.css">
    <link rel="stylesheet" href="css/csstest.css">
    <link rel="stylesheet" href="css/menu.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/pow-strip.ico">
    <title>PowerStrip</title>
</head>
<body>
  <form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>
  <?php 
if(isset($_POST['submit'])){
    $to = "frankyfictionary@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
   <div class="menu">
        <a href="index.html"><img src="images/imageedit_1_4471728365.gif" height="70" alt=""></a>
        <ul>
           <li><a href="om.html">Om</a></li>
           <li><a href="kontakt.html">Kontakt</a></li>
           <li><a href="produkt.html">Produkt</a></li>
        </ul>
        <div id="menu">
            <a href="#menu"></a>          
            <a href="#"><img src="images/1446564846_menu-alt.png" class="box-shadow-menu" alt=""></a>
            <a href="#" id="pull"></a>
        </div>
    </div>
    <nav class="mobile">
      <button>Toggle</button>
      <div>
          <a href="index.html"><img src="images/imageedit_1_4471728365.gif" alt="" width="50px" height="30px"></a>
          <a href="kontakt.html">Kontakt</a>
          <a href="produkt.html">Produkt</a>
          <a href="om.html">Om</a>
      </div>
    </nav>
    
    
    <div class="text-hoger">
       <h1>Kontakta webb snubbarna</h1> <br> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est voluptates expedita doloribus voluptate amet adipisci natus eum eligendi qui vero, laboriosam nulla iste nesciunt dolore molestias unde suscipit quia placeat temporibus iusto deserunt facere. Error sint assumenda saepe tempore sit autem vel voluptates. Eligendi quidem laboriosam voluptates consequatur ullam ad corporis laborum iste sequi architecto sint, repellat illo, ut sunt iusto aspernatur natus blanditiis eveniet ex quae officiis. Officia cum debitis quis aperiam aliquid provident reiciendis voluptatum vel repudiandae. Illum temporibus alias porro et laudantium culpa explicabo itaque numquam ut quae, delectus cumque natus beatae sapiente iste fuga ipsum id.</p>
    </div>
    
    <div class="text-vanster">
       <h1>Kontakta Powerstrip</h1>
       <br>
        <p>Ni kan nå PowerstripUF på vår E-post address eller kontakta oss via Facebook. <br> <br>Facebook: <a href="https://www.facebook.com/PowerStrip1UF/?fref=ts">PowerstripUF</a><br><br>
        E-Post: PowerstripUF@gmail.com
        </p>
    </div>
    
    
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="java/ny.js"></script>
</body>
</html>
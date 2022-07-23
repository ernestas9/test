<?php
    if(isset($_POST['submit'])) {
         $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from ="$email";
            $to = "ernestas5@yahoo.com";
            $subject = "Nauja zinute";
            $autorius = 'Nuo: ' . $name . ',' .$email;
            $zinute = htmlspecialchars($message);

    }
   
        }
                    echo "<script>alert('Dekojame Jusu zinute gauta. Netrukus susisieksime.');</script>";
        include('db.php');
    }
 ?>
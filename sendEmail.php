<?php


$username = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'users');
mysqli_select_db($db,'users');
  
if (isset($_POST['submit_email'])) {

        $username = mysqli_real_escape_string($db, $_POST['name_email']);
        $email = mysqli_real_escape_string($db, $_POST['email_email']);
        $mesaj = mysqli_real_escape_string($db, $_POST['message_email']);

        if (empty($mesaj)) { array_push($errors, "Dati un review."); }

        if (count($errors) == 0) {

            $query = "INSERT INTO emails (name, email, message)  VALUES ('$username', '$email', '$mesaj')";
            mysqli_query($db, $query);

        }
        

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($mesaj,100);

        // send email
        //mail($email,"Subiect",$mesaj);

}

?>
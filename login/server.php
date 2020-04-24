<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();
$admin = 0;
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'users');
mysqli_select_db($db,'users');
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    $admin = mysqli_real_escape_string($db, $_POST['admin']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Numele de utilizator este necesar"); }
    if (empty($email)) { array_push($errors, "Email-ul este necesar"); }
    if (empty($password_1)) { array_push($errors, "Parola este necesară"); }
    if ($password_1 != $password_2) {
        array_push($errors, "Cele două parole nu se potrivesc");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Numele de utilizator există deja");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email-ul există deja");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
        if (isset($_POST['admin']))
            $admin = 1;
        else
            $admin = 0;
            
        $query = "INSERT INTO users (username, email, password, admin) 
  			  VALUES('$username', '$email', '$password', '$admin')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = $admin;
        $_SESSION['success'] = "Sunteți logat în contul dumneavoastră";
        header('location: ../index.php');
    }
}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(isset($_POST['admin']))
    $admin = mysqli_real_escape_string($db, $_POST['admin']);
    if (empty($username)) {
        array_push($errors, "Numele de utilizator este necesar");
    }
    if (empty($password)) {
        array_push($errors, "Parola este necesară");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $query2 = "SELECT admin FROM users WHERE username='$username' AND password='$password'";

        $results = mysqli_query($db, $query);
        $results2 = mysqli_query($db, $query2);
        $row33 = mysqli_fetch_row($results2);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['admin'] = $row33[0];
            $_SESSION['success'] = "Sunteți logat în contul dumneavoastră";
            header('location: ../index.php');
        }else {
            array_push($errors, "Combinație nume de utilizator/parolă greșită");
        }
    }
}

?>
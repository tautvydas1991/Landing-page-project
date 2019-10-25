<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "vortex");
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "We are sorry, an error occured.\n";
    echo 'Error: ' . $mysqli->connect_error . '\n';
    exit();
}
 


if (isset($_POST['submit'])  && isset($_POST['package'])) {
    $form_name = mysqli_real_escape_string($mysqli, $_POST['name']); 
    $form_surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
    $form_email = mysqli_real_escape_string($mysqli, $_POST['email']); 
    $form_phone = mysqli_real_escape_string($mysqli, $_POST['phone']); 
    $form_message = mysqli_real_escape_string($mysqli, $_POST['message']);
    mysqli_query($mysqli, "INSERT INTO klientai (package, name, surname, email, phone, message, servicesone, servicestwo, servicesthree, servicesfour, servicesfive, servicessix) VALUES (('$_POST[package]'), '$form_name', '$form_surname', '$form_email', '$form_phone', '$form_message', ('$_POST[servicesone]'), ('$_POST[servicestwo]'), ('$_POST[servicesthree]'), ('$_POST[servicesfour]'), ('$_POST[servicesfive]'), ('$_POST[servicesix]'))");
    echo "<script type='text/javascript'>alert('We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!'); window.location.href='../index.php';</script>";
}elseif (isset($_POST['submit'])  && !isset($_POST['package'])) {
    echo "<script>alert('Please select the package you want.');</script>";
    return false;
}
if (isset($_POST['email_subscribe'])) {
    $email_subscription = mysqli_real_escape_string($mysqli, $_POST['email_subscription']);
    if (!empty($email_subscription)) {
        if (filter_var($email_subscription, FILTER_VALIDATE_EMAIL)) {
            mysqli_query($mysqli, "INSERT INTO subscribers (email) VALUES ('$email_subscription')"); 
            echo "<script>alert('Thank you for your subscription. Be sure to check your email for the latest news!'); window.location.href='../index.php';</script>";
        }else {
            echo "<script>alert('We are sorry. Your provided email adress is wrong.'); window.location.href='../index.php';</script>"; 
        }
    }
}
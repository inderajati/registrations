<?php 
  $db = mysqli_connect( 'localhost', 'root', '', 'registration' );
  $phone_number = "";
  $email = "";
  $regis_success = "";
  $disable_form = "";
  $activate_login = "";
  if ( isset( $_POST['register'] ) ) {

    $phone_number = '+62' . $_POST['phone-number'];
    $first_name   = $_POST['first-name'];
    $last_name    = $_POST['last-name'];
    $date_birth   = $_POST['date-birth'];
    $gender       = $_POST['gender'];
    $email        = $_POST['email'];

    $sql_pn = "SELECT * FROM users WHERE mobile_number='$phone_number'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";

    $res_pn = mysqli_query($db, $sql_pn);
    $res_e = mysqli_query($db, $sql_e);
 
    if (mysqli_num_rows($res_pn) > 0) {
      $phone_error = "Phone number already exist";  
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Email already taken";
    }else{
      $query = "INSERT INTO users (mobile_number, first_name, last_name, date_birth, gender, email) 
          VALUES ('$phone_number', '$first_name', '$last_name', '$date_birth', '$gender', '$email')";
      $results = mysqli_query($db, $query);
      
      $regis_success = 'Registered successfully, please login';
      $disable_form = 'disabled';
      $activate_login = 'display:block;';
    }
  }
?>
<?php
include "include/header.php";
if (isset($_POST['submit'])) {

   
    $form_name = $_POST['name'];
    $form_email = $_POST['email'];
    $form_phone = $_POST['phone'];
    $form_message = $_POST['message'];


    $to = "swartjide1@gmail.com";
    $subject = "New Quote Request";
    $message = "<b>This is to inform you that you have a new quote request from : $form_name with email: $form_email and phone: $form_phone.</b>";
    $message .= "<h1>$form_message</h1>";

    $header = "From:Quote Request from Website <swartjide@gmail.com> \r\n";
    // $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $retval = mail ($to,$subject,$message,$header);

    if($retval == true ) {
    //call sweet alert
    echo $welcome = 
    "<script type=\"text/javascript\">
    swal({
        title: 'Thanks $form_name!', 
        text:'your request has been received succesfully!', 
        icon: 'success',
        timer: 5000,
        button: false });

    setTimeout(function(){
    window.location.href = 'services';
    }, 5000);
    </script>";
    }else {
        echo $failed = 
        "<script type=\"text/javascript\">
        swal({
            title: 'OOPS!', 
            text:'An error occured, please try again', 
            icon: 'error',
            timer: 5000,
            button: false });
    
        setTimeout(function(){
        window.location.href = 'services';
        }, 5000);
        </script>";
    }
}

        

// include "include/footer.php";
?>
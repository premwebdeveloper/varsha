<?php
session_start();
if(isset($_POST)) 
    {

        if($_SESSION["code"] != $_POST["captcha"])

            {
                //echo "Captcha did not match !";
                echo "<script language='javascript'>alert('Captcha did not match !');window.location='http://jewelfabart.com/contactus';</script>";
                break;
            }

        $c_name= $_POST['name'];
        $mob_number= $_POST['phone'];
        if(array_key_exists('phone', $_POST))
              {
                if(!preg_match('/^[0-9]{10}+$/', $mob_number))
                {
                    echo "<script language='javascript'>alert('Invalid Number!');window.location='http://jewelfabart.com/contactus';</script>";
                    //echo "Invalid Number!";
                    break;
                }
              }
        $email_id= $_POST['email'];
        $city= $_POST['city'];
        $country= $_POST['country'];
        $comment= $_POST['message'];      
                 
        $message="";
        $message .="    // create the sending mail design acording to u 
        <table width='800' border='1' cellspacing='0' cellpadding='8' bordercolor='#CCCCCC'>      

                <tr>        

                    <td colspan='2' bgcolor='#CDD9F5'><strong>Customer Details</strong></td>               

                </tr>

                <tr>        

                    <td width='168' bgcolor='#FFFFEC'><strong>Candidate Name</strong></td>        

                    <td width='290' bgcolor='#FFFFEC'>$c_name</td>      

                </tr>

                <tr>        

                    <td bgcolor='#FFFFDD'><strong>E-mail ID</strong></td>        

                    <td bgcolor='#FFFFDD'>$email_id</td>      

                </tr>

                <tr>        

                    <td bgcolor='#FFFFDD'><strong>Mobile Number</strong></td>        

                    <td bgcolor='#FFFFDD'>$mob_number</td>      

                </tr>
                
                <tr>        

                    <td bgcolor='#FFFFDD'><strong>City</strong></td>        

                    <td bgcolor='#FFFFDD'>$city</td>      

                </tr>
                                
                <tr>        

                    <td bgcolor='#FFFFDD'><strong>Country</strong></td>        

                    <td bgcolor='#FFFFDD'>$country</td>      

                </tr>

                <tr>        
                    <td bgcolor='#FFFFDD'><strong>Message</strong></td>        

                    <td bgcolor='#FFFFDD'>$comment</td>      
                </tr>

            </table>";
        $subject  ="$c_name"; //like--- Resume From Website
        $headers  ="";
        include("PHPMailer/PHPMailerAutoload.php"); //Here magic Begen we include PHPMailer Library.
        include("PHPMailer/class.phpmailer.php");   
        $mail = new PHPMailer;
                                      // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'mail.jewelfabart.com;';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'test@jewelfabart.com';// SMTP username 
        $mail->Password = '{!zP1y[BuOpt'; // SMTP password 
        $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; 
        $mail->SMTPDebug = 0; // TCP port to connect to
        $mail->setFrom('test@jewelfabart.com', 'Contact Enquiry'); //You Can add your own From mail
        $mail->addAddress('indianvillagerugs@gmail.com'); // Add a recipient id where you want to send mail 
            
        $mail->addAttachment($_FILES['cv']['tmp_name'],$_FILES['cv']['name']); //This line Use to Keep User Txt,Doc,pdf file ,attachment      
        $mail->addReplyTo('$email'); //where you want reply from user
        $mail->isHTML(true); 
        $mail->Subject=''.$subject;
        $mail->Body=''.$message;
        if(!$mail->send()) 
            {                            
                echo "Error in Form :- $mail->ErrorInfo!. We will Fix This soon";
            }
        else 
            {    
                echo "<script language='javascript'>alert('Submitted Successfully!');window.location='http://jewelfabart.com/thankyou';</script>";
            }
         return true;       
    }

?>
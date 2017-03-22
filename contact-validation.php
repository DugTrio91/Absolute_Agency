 <?php
    
    $nameErr = "";
    $emailErr = "";
    $messageErr = "";
    $captchaErr = "";

    $errorCount = 0;

    if(isset($_POST["submit"])){
        if(isset($_POST["g-recaptcha-response"]) && !empty($_POST["g-recaptcha-response"])){

            //your site secret key
            $secret = "6LdR4BkUAAAAANykTHVfNIhEKvawb4O4yvGFa_Fj";
            //get verify response data
            $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["g-recaptcha-response"]);
            $responseData = json_decode($verifyResponse);

            if($responseData->success){
                //contact form submission code
                if (empty($_POST["name"])) {
                    $nameErr = "Please use a valid name";
                    $errorCount++;
                } else {
                    $name = test_input($_POST["name"]);
                }
    
                if (empty($_POST["tel"])) {
                    $tel = "";
                } else {
                    $tel = test_input($_POST["tel"]);
                }

                if (empty($_POST["email"])) {
                    $emailErr = "Please use a valid email";
                    $errorCount++;
                } else {
                    $email = test_input($_POST["email"]);
                }

                if (empty($_POST["url"])) {
                    $url = "";
                } else {
                    $url = test_input($_POST["url"]);
                }

                if (empty($_POST["message"])) {
                    $messageErr = "Please send a valid message";
                    $errorCount++;
                } else {
                    $message = test_input($_POST["message"]);
                }

                if($errorCount === 0){

                    $to = "markdallen@me.com";
                    $subject = "You have a message from a customer";
                    $htmlContent = "
                        <h1>Contact request details</h1>
                        <p><b>Name: </b>".$name."</p>
                        <p><b>Telephone: </b>".$tel."</p>
                        <p><b>Email: </b>".$email."</p>
                        <p><b>Website: </b>".$url."</p>
                        <p><b>Message: </b>".$message."</p>";

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    // More headers
                    $headers .= "From:" . $name . " <" . $email . ">\r\n";
                    //send email
                    mail($to, $subject, $htmlContent, $headers);
                    echo "<div class='notification'>Your contact request was submitted. We will be in touch as soon as possible.</div>";

                }

            } else {
                $captchaErr = "Robot verification failed. Please try again";
            }

        } else {
            $captchaErr = "Please click on the reCAPTCHA box.";
        }

    }
?> 
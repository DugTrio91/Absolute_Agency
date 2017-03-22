<?php
    $title = "Absolute Agency | Get in touch";
    include_once "header.php";
?>
    <?php include_once "map.php"; ?>
<div class="contact-area">
<div class="contact-form">
<form action="" method="POST">
    <input type="text" name="name" value="" placeholder="Name"/>
    <span class="error">* <?php echo $nameErr;?></span>
    <input type="tel" name="tel" value="" placeholder="Telephone"/>
    <input type="email" name="email" value="" placeholder="Email"/>
    <span class="error">* <?php echo $emailErr;?></span>
    <input type="url" name="url" value="" placeholder="Website"/>
    <textarea type="text" name="message"></textarea>
    <span class="error">* <?php echo $messageErr;?></span>
    <div class="g-recaptcha" data-sitekey="6LdR4BkUAAAAAKp1JfvvxAK-qbZ5zG_oiro0bnW4"></div>
    <input type="submit" name="submit" value="SUBMIT">
</form>
   
    <?php
       if(isset($_POST['submit']) && !empty($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LdR4BkUAAAAANykTHVfNIhEKvawb4O4yvGFa_Fj';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
              } else {
                $name = test_input($_POST["name"]);
              }
    
            if (empty($_POST["tel"])) {
                $tel = "";
              } else {
                $tel = test_input($_POST["tel"]);
              }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = test_input($_POST["email"]);
              }

            if (empty($_POST["url"])) {
                $url = "";
              } else {
                $url = test_input($_POST["url"]);
              }

            if (empty($_POST["message"])) {
                $messageErr = "Message is required";
              } else {
                $message = test_input($_POST["message"]);
              }

            $to = 'markdallen@me.com';
            $subject = 'You have a message from a customer';
            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$name."</p>
                <p><b>Telephone: </b>".$tel."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Website: </b>".$url."</p>
                <p><b>Message: </b>".$message."</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            //send email
            @mail($to,$subject,$htmlContent,$headers);
            
            echo 'Your contact request was submitted. We will be in touch as soon as possible.';
        else:
            echo 'Robot verification failed, please try again.';
        endif;
    else:
        echo 'Please click on the reCAPTCHA box.';
    endif;
else:
    echo '';
    echo '';
endif;
        ?>
        </div>
    </div>
        
        <?php include_once "footer.php"; ?>
<?php

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include_once "header.php";  
?> 

<div id="case-study-menu">
    <span id="case-study-menu-title">Cover</span>
    <hr />
    <a title="Cover">Cover</a>
    <a title="Introduction">Introduction</a>
    <a title="About the Client">About the Client</a>
    <a title="Design">Design</a>
    <a title="Solution">Solution</a>
    <a title="Contact">Contact</a>
</div>
<div class="case-study">
    <div class="cover-gradient"></div>

    <?php        

        $id = $_GET["id"];
        if(isset($id)){

            $sql = "SELECT * FROM portfoliolist WHERE ID = $id";
            $result = mysqli_query($dbconnect, $sql);

            while($row = mysqli_fetch_array($result)){

                $title = $row["portfolioTitle"];

                //cover
                $out .= "<div id='container1' class='cs-container case-study-container1' style='background: url(" . $row["coverImage"] . ") top no-repeat; background-size: cover;'></div>";
                $out .= "<div class='case-study-info'><div class='cover cover-logo' style='background: url(" . $row["logo"] . ") center no-repeat; background-size: contain;'></div>";
                $out .= "<div class='cover cover-text'><h2>" . $row["portfolioTitle"] . "</h2></div>";
                $out .= "</div>";
                //container2
                $out .= "<div id='container2' class='cs-container case-study-container2'>";
                $out .= "<div class='splitcontainer-upper'><p><i>" . $row["aboutIntro"] . "</i></p></div>";
                $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image2"] . ") center no-repeat; background-size: cover;'></div>";
                $out .= "</div>";
                //container3
                $out .= "<div id='container3' class='cs-container case-study-container3'>";
                $out .= "<div class='splitcontainer-upper'><h2>About the Client</h2><p>" . $row["aboutClient"] . "</p></div>";
                $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["image3"] . ") center no-repeat; background-size: cover;'></div>";
                $out .= "</div>";
                //container4
                $out .= "<div id='container4' class='cs-container case-study-container4' style='background: url(" . $row["image4"] . ") center no-repeat; background-size: cover;'></div>";
                //final
                $out .= "<div id='container5' class='cs-container case-study-container5'>";
                $out .= "<div class='splitcontainer-upper'><h2>Our solution</h2><p>" . $row["aboutDesign"] . "</p></div>";
                $out .= "<div class='splitcontainer-lower' style='background: url(" . $row["finalImage"] . ") center no-repeat; background-size: cover;'></div>";
                $out .= "</div>";
                    
                //output
                echo $out;
        
            }

        }

    ?>
    
    <div id="container6" class="container case-study-container6">
        <h2>Need something similar?</h2>
        
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
        
        <div class="casestudy-contact-form">
            <form action="#casestudy-form" method="post" id="casestudy-form">
                <input type="text" name="name" placeholder="&#xf2c0;  Name"/>
                <div class="error"><?php echo $nameErr;?></div>
                <input type="tel" name="tel" value="" placeholder="&#xf095;  Phone"/>
                <input type="email" name="email" value="" placeholder="&#xf003; Email"/>
                <div class="error"><?php echo $emailErr;?></div>
                <input type="url" name="url" value="" placeholder="&#xf109;  Website"/>
                <textarea type="text" name="message" placeholder="&#xf040;  Message"></textarea>
                <div class="error"><?php echo $messageErr;?></div>
                <div id="casestudy-captcha" class="g-recaptcha" data-sitekey="6LdR4BkUAAAAAKp1JfvvxAK-qbZ5zG_oiro0bnW4"></div>    
                <input class="footer-button" type="submit" id="submit" type="button" name="submit" value="Send">
            </form>
        </div>
        <div class="other-projects">
            <h3>Other Projects</h3>
            <br>
            <br>
            
        <?php

				$sql = "SELECT * FROM portfoliolist ORDER BY RAND() LIMIT 3";
				$result = mysqli_query($dbconnect, $sql);

                while($row = mysqli_fetch_array($result)){
                    
                    echo "<a href=\"casestudy.php?id=" . $row["ID"] . "\">";
                    echo "<div class='featured-projects-container'>";
                    echo "<div class='portfolio-image-container'>";
				    echo "<img src='" .  $row["coverImage"] . "'/>";
                    echo "</div>";
                    echo "<h4>" . $row["portfolioTitle"] . "</h4></a>";
                    echo "</div>";
                    
				}

			?>
        
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>
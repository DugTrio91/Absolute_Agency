<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css" />
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <div class="navigation">
        <div class="logo" onclick="location.href='index.php';" style="cursor: pointer;"></div>
        <nav id="menu">
            <ul>
                <li><a href="#" title="Home">Home</a></li>
                <li><a href="#" title="About">About</a></li>
                <li><a href="work.php" title="Work">Work</a></li>
                <li><a href="#" title="Services">Services</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Contact">Contact</a></li>
                <li>
                    <hr />
         
                </li>
                <li class="social-links">
                    <ul>
                       <li class="contact-link">
                            <a href=mailto:hello@absolute-agency.co.uk>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="tel:07740988831">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                             </a>
                        </li>
                    
                        <li>
                            <a href="#" title="Twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Pinterest">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <header>
            <a id="icon-menu" title="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </header>
    </div>
    <script src="scripts/main.js"></script>

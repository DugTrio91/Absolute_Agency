<?php include_once "scripts/connector.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Include facebook metadata for sharing blog posts-->
    <?php include_once "fb-metadata.php"; ?>
    <!--Icon and favicon files-->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon-180x180.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/typography.css" />
    <link rel="stylesheet" href="css/main.css" />
    <title><?php echo $title; ?></title>
</head>

<body>
    <!-- off screen navigation -->
    <nav id="menu">
        <ul>
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a href="about.php" title="About">About</a></li>
            <li><a href="work.php" title="Work">Work</a></li>
            <li><a href="blog.php" title="Blog">Blog</a></li>
            <li><a href="contact.php" title="Contact">Contact</a></li>
            <li><hr /></li>
            <li class="social-links">
                <ul>
                   <li>
                        <a href="mailto:hello@absolute-agency.co.uk" title="Email us">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="tel:07740988831" title="Call us">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/absolute_hello" title="Twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/absoluteprofile" title="Facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://uk.pinterest.com/absolute_pin/" title="Pinterest">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/absolute_pics/" title="Instagram">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- start of on screen content -->
    <header>
        <a class="logo" href="index.php" title="Home"></a>
        <a id="icon-menu" title="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </header>

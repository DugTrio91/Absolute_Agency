<?php
    $title =  "The Black Mulberry | Absolute Agency";
    include_once "header.php";
    include_once("scripts/connector.php");

    function linkify($title){
        $lower = strtolower($title);
        return str_replace(" ", "-", $lower) . ".php";
    }

?>

    <div id="case-study-menu">
        <span id="case-study-menu-title">Intro</span>
        <hr />
        <a href="#container1" class="" title="Intro">Cover</a>
        <a href="#container2" title="">Introduction</a>
        <a href="#container3" title="">About the Client</a>
        <a href="#container4" title="">Logo</a>
        <a href="#container5" title="">Design</a>
        <a href="#container6" title="">Contact</a>
    </div>

    <div class="case-study">
        <div class="cover-gradient"></div>

        <div id="container1" class="container mulberry-container1">
            <div class="title mulberry-title">
                <div class="cover cover-logo"></div>
                <div class="cover cover-text">
                    <h2>The Black Mulberry</h2>
                </div>
            </div>
        </div>
        <div id="container2" class="container mulberry-container2">
            <div class="splitcontainer-upper">
                <p><i>“Legend has it that the tree was planted during the reign of King James 1 and is over 400 years old. At the time the King was trying to encourage the development of a national silk industry. Sadly the much sought after silk trade never took off as silkworms only feed off the white mulberry tree, leaving this lovely Black Mulberry to enjoy its days standing proudly beside the Weeping Willow watching over the River Nidd.”</i></p>
            </div>
            <div class="splitcontainer-lower mulberry-container2-lower"></div>
        </div>
        <div id="container3" class="container mulberry-container3">
            <div class="splitcontainer-upper">
                <h2>About the Client</h2>
                <p>The Rascals Cafe approached us to rename and rebrand their traditional cafe on Knaresbrough Waterside. Situated in a market town rich in history, they wanted a name that had historical and regional relevance. Working with the client we discovered the story of The Black Mulberry.</p>
            </div>
            <div class="splitcontainer-lower mulberry-container3-lower"></div>
        </div>
        <div id="container4" class="container mulberry-container4"></div>
        <div id="container5" class="container mulberry-container5">
            <div class="splitcontainer-upper">
                <h2>The Design</h2>
                <p>We created a contemporary yet rustic feel, that was applied to a suite of marketing materials including the design of menus, loyalty cards, signage and invitations, as well as setting up and managing their social media channels.</p>
            </div>
            <div class="splitcontainer-lower mulberry-container5-lower"></div>

            <div id="container6" class="container mulberry-container6">
                <h2>Need something similar?</h2>
                <div class="contact-form">
                    <form method="post" action="index.php">
                        <input name="name" placeholder="Full Name">
                        <input name="email" type="email" placeholder="Email Address">
                        <input name="telephone" type="telephone" placeholder="Telephone Number">
                        <textarea name="message" placeholder="Message"></textarea>
                        <br/>

                        <input id="submit" name="submit" type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once "footer.php"; ?>
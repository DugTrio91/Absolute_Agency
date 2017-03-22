<footer>
    <!--Campaign monitor newsleter-->
    <div class="footer-container">
        <h4>Newsletter</h4>
        <hr>
        <form action="http://markallendesign.createsend.com/t/d/s/pkyhty/" method="post" id="subForm">
            <input id="fieldEmail" name="cm-pkyhty-pkyhty" placeholder="&#xf003; Email" type="email" required />
            <input class="footer-button" type="submit" id="submit" value="Subscribe" onClick="Confirm(this.form)">
        </form>
        <!--'Thank You' Pop up for newsletter-->
        <script>
            function Confirm(form) {
                alert("Thank you for signing up to our newsletter");
                form.submit();
            }
        </script>
    </div>
    <!--Twitter feed-->
    <div class="footer-container">
        <h4>Latest tweets</h4>
        <hr>
        <a class="twitter-timeline" data-width="350" data-height="300" data-dnt="true" data-link-color="#b49759" data-chrome="nofooter transparent noheader transparent" href="https://twitter.com/absolute_hello"></a>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="footer-container">
        <h4>Get in touch</h4>
        <hr>
        <p>Want to discuss your next brand, design or web project with us?</p>
        <br>
        <form action="contact.php" method="get">
        <input class="footer-button" type="submit" id="submit" value="Contact us"/>
</form>
    </div>
    <br>
    <hr>
    <p>©2017 Absolute | <a href="index.php">Home |</a> <a href="about.php">About |</a> <a href="work.php">Work |</a> <a href="blog.php">Blog |</a> <a href="contact.php">Contact</a> </p>
</footer>
<script src="scripts/main.js"></script>
</body>

</html>
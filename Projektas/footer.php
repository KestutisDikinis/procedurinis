</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<footer class="footer">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="list-inline banner-social-buttons">
                            <li><a href="https://www.facebook.com/ignalinosdviraciuklubas" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>
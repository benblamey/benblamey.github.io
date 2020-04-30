<?php

function printHeader($pageName) {
    ?>
    <!DOCTYPE html> 
    <HTML>
        <HEAD>
            <TITLE>Ben Blamey - <?php echo $pageName ?></TITLE>

            <meta name="keywords" content="$pageName">
            
            <style type="text/css">
                html { 
                    background: url(vietnam.jpg) no-repeat left top fixed; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    font-family: Trebuchet MS, Helvetica, sans-serif;
                }
                p.abstract {
                    font-size: 80%
                }
                h2 {
                    padding-top: 20px
                }
            </style>

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129343711-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-129343711-1');
            </script>


        </HEAD>
        <BODY style="margin-top:0px; margin-bottom:0px">

            <div style="background-color:rgba(255,255,255,0.85); float:center; max-width:625px; margin: 0 auto">
                <div style="padding-left: 30px; padding-right: 20px; padding-top: 10px; padding-bottom: 40px;">

                    <H1>Ben Blamey</H1>

                    <a href=".">About Me</a>
                    <!-- | <a href="consulting">Hire Me</a> -->
                    | <a href="publications">Publications</a>
                    <!-- | <a href="research">Research</a> -->
                    | <a href="code">Code</a>

                    <?php
                }

                function printFooter() {
                    ?>
                    <br/><br/>

                    <p style="font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace;">
                        [myfirstname]@benblamey.com
                    </p> 

                    <p style="font-size: small">
                        <a href="http://uk.linkedin.com/in/benblamey">LinkedIn</a> |
                        <a href="https://github.com/benblamey">GitHub</a> |
                        <a href="http://scholar.google.co.uk/citations?user=MTaRAPQAAAAJ&hl=en">Google Scholar</a> |
                        <a href="http://cardiffmet.academia.edu/BenBlamey">Academia.edu</a> |
                        <a href="https://www.facebook.com/ben.blamey">Facebook</a> |
                        <a href="http://www.researchgate.net/profile/Ben_Blamey">ResearchGate</a> |
                        <a href="https://twitter.com/benblamey">Twitter</a> |
                        <a href="http://www.informatik.uni-trier.de/~ley/pers/hd/b/Blamey:Ben.html">dblp</a> |
                        <a href="http://stackexchange.com/users/418854/ben">StackExchange</a> |
						<a href="https://keybase.io/benblamey">keybase.io</a> |
						<a href="https://bitbucket.org/benblamey/">bitbucket</a> |
						<a href="https://hub.docker.com/r/benblamey/">dockerhub</a> |
						<a href="http://www.it.uu.se/katalog/benbl899">Uppsala University Profile</a>
                    </p>


                </div>
            </div>

        </BODY>
    </HTML>

<?php } ?>
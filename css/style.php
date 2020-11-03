<?php
    header('content-type: text/css');
?>
body {
    box-sizing: content-box;
}

.logo img {
    width: 100%;
}

.paragraphe {
    padding: 1vh 3vh;
}

.sous-paragraphe {
    padding: 1vh 0;
}

small {
    color: grey;
}

.nav>a.active,
.nav>a:hover,
.nav>a:focus {
   background-color: #C6E2FA;
   color: black;
}

.box {
    border: 1px solid lightgrey;
    border-radius: 1vh
}

.carousel-control-next,
.carousel-control-prev /*, .carousel-indicators */ {
    filter: invert(100%);
}
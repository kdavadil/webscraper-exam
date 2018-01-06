  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CHANGE THE TITLE FOR EACH PAGE -->

    <title>Webscraper</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<style>


body, html {
    height: 100%;
    margin: 0;

}

.full {
    width: 100%;    
}
.gap {
    height: 30px;
    width: 100%;
    clear: both;
    display: block;
}
.footer {
    background: #EDEFF1;
    height: auto;
    padding-bottom: 30px;
    position: relative;
    width: 100%;
    border-bottom: 1px solid #CCCCCC;
    border-top: 1px solid #DDDDDD;
}
.footer p {
    margin: 0;
}
.footer img {
    max-width: 100%;
}
.footer h3 {
    border-bottom: 1px solid #BAC1C8;
    color: #54697E;
    font-size: 18px;
    font-weight: 600;
    line-height: 27px;
    padding: 40px 0 10px;
    text-transform: uppercase;
}
.footer ul {
    font-size: 13px;
    list-style-type: none;
    margin-left: 0;
    padding-left: 0;
    margin-top: 15px;
    color: #7F8C8D;
}
.footer ul li a {
    padding: 0 0 5px 0;
    display: block;
}
.footer a {
    color: #78828D
}
.supportLi h4 {
    font-size: 20px;
    font-weight: lighter;
    line-height: normal;
    margin-bottom: 0 !important;
    padding-bottom: 0;
}

.footer-bottom {
    background: #E3E3E3;
    border-top: 1px solid #DDDDDD;
    padding-top: 10px;
    padding-bottom: 10px;
}
.footer-bottom p.pull-left {
    padding-top: 6px;
}


/***********************************************************************
*  OPAQUE NAVBAR SECTION
***********************************************************************/
.opaque-navbar {
    background-color: rgba(0,0,0,0.5);
  /* Transparent = rgba(0,0,0,0) / Translucent = (0,0,0,0.5)  */
    height: 60px;
    border-bottom: 0px;
    transition: background-color .5s ease 0s;
    font-family: 'Lobster', cursive;
    font-size: 20px;
}

.opaque-navbar.opaque {
    background-color: black;
    height: 60px;
    transition: background-color .5s ease 0s;
}

ul.dropdown-menu {
    background-color: white;
    color: black;
    text-align: center;
}


@media (max-width: 992px) {
  .opaque-navbar {
    background-color: black;
    color: black;
    height: 60px;
    transition: background-color .5s ease 0s;
}

}

/*   MODAL LOGIN  */

.modal-header, h4, .close {
      background-color: #6495ED;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #6495ED ;
  }

/* MODAL REGISTER*/

/* The Modal (background) */
.modal-register {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/*  HERO IMAGE  */

.hero-image {
  background-image: url("img/cup-of-coffee-1280537.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-image label {
  color: lightgray;
}

.hero-image table {
  color: black;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

</style>
</head>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ross Fenrick Web Design & Development</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- CSS RESET -->
    <style>
    html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite,
    code,del, dfn, em, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td,article, aside, canvas, details, embed, figure, 
    figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary,time, mark, audio, video 
    {   margin: 0;  padding: 0; border: 0;  font-size: 100%;    font: inherit;  vertical-align: baseline;}

    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, 
    section {   display: block;}body {  line-height: 1;}ol, ul {    list-style: none;}blockquote, q {   quotes: none;}
    blockquote:before, blockquote:after,q:before, q:after { content: '';    content: none;}table {  border-collapse: collapse;  border-spacing: 0;}
    </style>
    <link type="text/css" rel="stylesheet" href="css/styles.css" />
    <link type="text/css" rel="stylesheet" href="css/animate.css" />
    <link type="text/css" rel="stylesheet" href="css/hover.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
</head>
<body>

<form action="" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" />

  <label for="Email">Email:</label>
  <input type="text" name="email" id="email" />

  <label for="Message">Message:</label><br />
  <textarea name="message" rows="20" cols="20" id="message"></textarea>

  <input type="submit" name="submit" value="Submit" />
</form>

<?php
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['message']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'hello@rossfenrick.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: thanks.html');
?>


</body>
</html>
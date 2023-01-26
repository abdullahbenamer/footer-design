<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300&family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
   <div><h1>Footer Design</h1></div> 
   <!-- =====

    * Author: Abdullah Ben Amer, Jan 2023
    feel free to contact me :
    email: benamer@gmail.com
    
    WA: +905349216965

Thank you for using this script

*** Its is free as long as you don't remove the above Author lines.***
    
This Footer consists of two sections: 
1- Company Details: it contains of three columns with address details, phone details and Email details all in the same row.
2- Copyright Information: This contains information about the Copyright and links edit them for your social media.

How this footer designed:
First add the link of Font Awesome Icons to between the heade tag like so:
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

the font awesome Icons used at different places in the footer. 
   -->

   <!-- to use the icons just add somthing similar to below class to a span tag. 
 
<span class="fa fa-icon_name"></span> Where, icon_name is the name of the icon. -->

<!-- =======

HTML file divided the footer in two sections namely Company Details and Copyright Information. 
Follow the below steps: 
 
here how to memeic the steps:
Create two div’s with class names as “company-details” and “copyright” respectively.

Steps For div with class “company-details”:
1- Add a div with class named as “row”.
2- Add three div’s inside the previous div with id’s col1, col2 and col3 respectively.
For each of the column divs declare two span tags. One for the font awesome icon and second for the information.

Steps For div with class “copyright”: 
1- Add a paragraph element to show the text: “© All rights reserved | GeeksforGeeks.”
2- Add an unordered list of three elements to show the three social media icons.
   
Below is the complete HTML code of the footer: ======= -->

<!-- after reviewing the below HTML go to the css file (style.css) to apply the suggested styles -->


<!-- == Footer Menu == -->
<footer id="footer">

<div class="company-details">
    <div class="row">
        <div id="col1">
            <span id="icon" class="fa fa-map-marker fa-2x"></span>
            <span>Cumhuriyet District. 10 Ergenekon Street., <br>
                Ahmetbey 4th Floor, Pangalti, <br>
                1773 Tripoli, Libya</span>
        </div>

        <div id="col2">
            <span id="icon" class="fa fa-phone fa-2x"></span>
            <span>+90 (534) 921 69 65</span>

        </div>

        <div id="col3">
            <span id="icon" class="fa fa-envelope fa-2x"></span>
            <span>benamer@gmail.com</span>
        </div>
    </div>

</div>

<!-- == Copyright section== with Javascript for getting current year -->
<div class="copyright">
    <p>&copy; Abdullah Ben Amer, 1999 - <script> document.write(new Date().getFullYear());</script></p>


        <ul class="contact">
        <li>
            <a href="#" class="fa fa-twitter">
            </a>

        </li>
        <li>
            <a href="#" class="fa fa-facebook"></a>
        </li>
      
        <li>
            <a href="#" class="fa fa-youtube"></a>
        </li>
       

    </ul>
</div>

</footer>

</body>
</html>


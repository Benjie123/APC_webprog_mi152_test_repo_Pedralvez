<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Page';
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
<center>
  	  <img src = "playing.gif" width="630" height="320" ></center>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: Blue;
}
.error {
	color : red;
}
#form {
	color: white;
}
.move {
	text-align: center;
}
body {
    background-color: black;
}


</style>
	</head>
<body style="background-image: url(gaming.png.png);">
<strong><h1 style="text-align:center; color:White; font-family:comic sans ms">Benjamin Pedralvez</h1>
<p style="text-align:center; color:White; font-family:comic sans ms" id="demo">Lives in Paoville Delta Fort Bonifacio Taguig City, 17 Years old, studying BSIT-MI at Asia Pacific College, Nickname:
 Benjie</p></strong>
                                                                  
 <button type="button" style="background-color:white;margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%"onclick="document.getElementById('demo').style.fontSize='35px'">Click Me to make it bigger!</button>
 <p style="text-align:center; color:white; font-family:comic sans ms"><font size="3">(Websites are clickable)</font></p>
<table>
  <tr>
    <th style="color:White;"=>Favourite Websites</th>
    <th style="color:White;"=>Hobbies</th>
    <th style="color:White;"=>Interest</th>
  </tr>
  <center>
  	  <img src = "playing computer.gif" width="630" height="320" ></center>
  <tr>
    <td><a href="https://www.youtube.com/" style="color: white;">Youtube</a></td>
    <td style="color:White;">Playing Computer Games</td>
    <td style="color:White;">Playing More Computer Games</td>
  </tr>
  <center>
      <img src = "football.gif" width="630" height="320" ></center>
  <tr>
    <td><a href="https://www.facebook.com/" style="color: white;">Facebook</td>
    <td style="color:White;"=>Sleeping</td>
    <td style="color:White;"=>Learn anything useful in my Course</td>
  </tr>
  <tr>
    <td><a href="https://www.twitch.tv/" style="color: white;">Twitch.TV</td>
    <td style="color:White;"=>Football</td>
    <td style="color:White;"=>Assemble Fast Computers</td>   	
  </tr>
  <center>
      <img src = "website.gif" width="630" height="320" ></center>
  <table>
  <tr>
  <th style="text-align:center; color:White;"=><font size="7">Trivia About Me!</font></th>
  </tr> 
  <td style=" text-align:center;color:White;">
 What is my Favourite Computer Game?<p id="demo1">----------------</p>
<button type="button" onclick="document.getElementById('demo1').innerHTML = 'League Of Legends!'">Click Me to find out!</button> </td> 
  </tr>
   <td style=" text-align:center;color:White;">
 What is my Food?<p id="demo2">----------------</p>
<button type="button" onclick="document.getElementById('demo2').innerHTML = 'Chicken and Bacon!'">Click Me to find out!</button>
</tr>
 <td style=" text-align:center;color:White;">
 What is my Favourite Sport?<p id="demo3">----------------</p>
<button type="button" onclick="document.getElementById('demo3').innerHTML = 'Badminton, Swimming and American Football(Rugby)!'">
Click Me to find out!</button>
</tr>
 <td style=" text-align:center;color:White;">
 What is my Dream?<p id="demo4">----------------</p>
<button type="button" onclick="document.getElementById('demo4').innerHTML = 'My dream is to graduate as an Sucessful IT and earn a lot of money and repay my parents for what they ve done to me!'">Click Me to find out!</button>
</tr>
 <td style=" text-align:center;color:White;">
 What is my plan after I graduate?<p id="demo5">----------------</p>
<button type="button" onclick="document.getElementById('demo5').innerHTML = 'After I graduate as BSIT-MI, I want to teach first in a public school for 2 years and pursue my dream to become a person who can fix and program things that make our lives easier!'">Click Me to find out!</button>
</td>

</table>
</div>
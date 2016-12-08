 <?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
 <!DOCTYPE html>
<html>
<center><div><img src="playing.gif"style="width:600px;height:404px;"></div>
</center>
<head>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>
</head>
<body background="gaming.png.png">
<style>
a {
	text-decoration: none;
	color: white;
	font-size: 18px;
	font-family: cursive;
	font-weight: bold;
}

a:hover {
	opacity: 0.7;
	color: blue;
}
th, td {
	color: white;
}
</style>
<center>
<br><br>
<a href="add_data.php">CREATE DATABASE</a>
</center>
<div id="body">
 <div id="content">
    <table align="center">
    <th>Complete Name</th>
    <th>Nickname</th>
    <th>Email Address</th>
	<th>Address</th>
	<th>Gender</th>
	<th>Cellphone Number</th>
	<th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysqli_query($con, $sql_query);
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>
<h1 style="text-align:center; color:White; font-family:comic sans ms">Benjamin T. Pedralvez</h1>
<p style="text-align:center; color:White; font-family:comic sans ms" id="demo">Lives in D0631 Paoville Delta Fort Bonifacio Taguig City, 17 Years old, studying BSIT-MI at Asia Pacific College, Nickname:
 Benjie</p>
                                                                 
 <button type="button" style="background-color:white;margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%"onclick="document.getElementById('demo').style.fontSize='35px'">Click Me to make it bigger!</button>
 <p style="text-align:center; color:white; font-family:comic sans ms"><font size="3">(Websites are clickable)</font></p>
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
</style>
</head>
<body>

<table>
  <tr>
    <th style="color:White;"=>Favourite Websites</th>
<<<<<<< HEAD
    <th style="color:White;"=>My Hobbies!</th>
    <th style="color:White;"=>My Interest!</th>
=======
    <th style="color:White;"=>My Hobbies</th>
    <th style="color:White;"=>My Interest</th>
>>>>>>> d3eba62ce9b340be7ba1129b2665771478f5423b
  </tr>
  <img src="playing computer.gif" WIDTH="667" HEIGHT="320">
  <tr>
    <td><a href="https://www.youtube.com/" style="color: white;">Youtube</a></td>
    <td style="color:White;">Playing Computer Games!</td>
    <td style="color:White;">Playing More Computer Games!</td>
  </tr>
  <img src="football.gif" WIDTH="666" HEIGHT="321">
  <tr>
    <td><a href="https://www.facebook.com/" style="color: white;">Facebook</td>
<<<<<<< HEAD
    <td style="color:White;"=>Sleeping and eating</td>
=======
    <td style="color:White;"=>Sleeping</td>
>>>>>>> d3eba62ce9b340be7ba1129b2665771478f5423b
    <td style="color:White;"=>Learn something interesting about the course I'm taking and apply it to the real world</td>
  </tr>
  <tr>
    <td><a href="https://www.twitch.tv/" style="color: white;">Twitch.TV</td>
    <td style="color:White;"=>Football and badminton</td>
    <td style="color:White;"=>Fix and Build Computer</td>   	
  </tr>
  <div class="move"><img src="website.gif" WIDTH="625" HEIGHT="320"></div>
  <table>
  <tr>
  <th style="text-align:center; color:White;"=><font size="7">Trivia About Me!</font></th>
  </tr> 
  <td style=" text-align:center;color:White;">
 What is my Favourite Computer Game?<p id="demo1">----------------</p>
<button type="button" onclick="document.getElementById('demo1').innerHTML = 'League Of Legends and Dota 2!'">Click Me to find out!</button> </td> 
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
<button type="button" onclick="document.getElementById('demo4').innerHTML = 'My dream is to graduate as an Sucessful IT student and earn a lot of money and repay my parents for what they've done to me!'">Click Me to find out!</button>
</tr>
 <td style=" text-align:center;color:White;">
 What is my plan after I graduate?<p id="demo5">----------------</p>
<button type="button" onclick="document.getElementById('demo5').innerHTML = 'After I graduate as BSIT-MI, I want to teach first in a public school for 2 years just for experience and pursue my dream to become a person who can fix and program things that make our lives easier!'">Click Me to find out!</button>
</td>
</body>
  
</html>

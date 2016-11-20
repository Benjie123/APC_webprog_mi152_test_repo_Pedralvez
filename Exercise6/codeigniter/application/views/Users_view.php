<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Main Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="Users_edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>
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

<body style="background-image: url(http://localhost/bj/codeigniter/pics/gaming.png.png);">
<h1 style="text-align:center; color:White; font-family:comic sans ms">Benjamin Pedralvez</h1>
<p style="text-align:center; color:White; font-family:comic sans ms" id="demo">Lives in Paoville Delta Fort Bonifacio Taguig City, 17 Years old, studying BSIT-MI at Asia Pacific College, Nickname:
 Benjie</p>
                                                                 
 <button type="button" style="background-color:white;margin-left:auto;margin-right:auto;display:block;margin-top:0%;margin-bottom:0%"onclick="document.getElementById('demo').style.fontSize='35px'">Click Me to make it bigger!</button>
 <p style="text-align:center; color:white; font-family:comic sans ms"><font size="3">(Websites are clickable)</font></p>
<div id="body">
	<div id="content">
		<CENTER><a href="<?php echo base_url();?>index.php/users/add_form">Add user here.</a></CENTER>
		<table align="center">
			<tr>
				<th>Complete Name</th>
				<th>Nickname</th>
				<th>Email Address</th>
				<th>Home Address</th>
				<th>Gender</th>
				<th>Cellphone Number</th>
				<th>Comment</th>
				<th colspan="2">Operations</th>
			</tr>
			
		<?php foreach ($user_list as $u_key){ ?>

			<tr>

				<td><?php echo $u_key->complete_name; ?></td>

				<td><?php echo $u_key->nickname; ?></td>

				<td><?php echo $u_key->Email_Address; ?></td>

				<td><?php echo $u_key->Home_Address; ?></td>
				
				<td><?php echo $u_key->gender; ?></td>
				
				<td><?php echo $u_key->cellphone; ?></td>
				
				<td><?php echo $u_key->comment; ?></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('Users_edit',<?php echo $u_key->user_id;?>)">EDIT</a></td>

				<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)">DELETE</a></td>

			</tr>

<?php }?>
			
			
		</table>
	</div>
</div>

<table>
  <tr>
    <th style="color:White;"=>Favourite Websites</th>
    <th style="color:White;"=>Hobbies</th>
    <th style="color:White;"=>Interest</th>
  </tr>
  <img src="<?php echo base_url();?>pics/playing computer.gif" WIDTH="630" HEIGHT="320">
  <tr>
    <td><a href="https://www.youtube.com/" style="color: white;">Youtube</a></td>
    <td style="color:White;">Playing Computer Games</td>
    <td style="color:White;">Playing More Computer Games</td>
  </tr>
  <img src="<?php echo base_url();?>pics/football.gif" WIDTH="630" HEIGHT="320">
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
  <div class="move"><img src="<?php echo base_url();?>pics/website.gif" WIDTH="625" HEIGHT="320"></div>
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

</body>

</html>	
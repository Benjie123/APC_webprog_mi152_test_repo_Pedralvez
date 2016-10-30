  <!DOCTYPE html>
<html>
<center><div><img src="playing.gif"style="width:600px;height:404px;"></div>
</center>
<body background="gaming.png.png">

<h1 style="text-align:center; color:White; font-family:comic sans ms">Benjamin Pedralvez</h1>
<p style="text-align:center; color:White; font-family:comic sans ms" id="demo">Lives in Paoville Delta Fort Bonifacio Taguig City, 17 Years old, studying BSIT-MI at Asia Pacific College, Nickname:
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
    <th style="color:White;"=>Hobbies</th>
    <th style="color:White;"=>Interest</th>
  </tr>
  <img src="playing computer.gif" WIDTH="630" HEIGHT="320">
  <tr>
    <td><a href="https://www.youtube.com/" style="color: white;">Youtube</a></td>
    <td style="color:White;">Playing Computer Games</td>
    <td style="color:White;">Playing More Computer Games</td>
  </tr>
  <img src="football.gif" WIDTH="630" HEIGHT="320">
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
  <div class="move"><img src="website.gif" WIDTH="625" HEIGHT="320"></div>
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

<div id="form">
<?php	
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $nickErr = "";
$name = $email = $gender = $comment = $nick = $home = $num = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["home"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home"]);
  }
  
  if (empty($_POST["num"])){
	  $num = "";
  } else {
	  $num = test_input($_POST["num"]);
  }
  
  if (empty($_POST["nick"])) {
	  $nickErr = "Nickname is required";
  } else {
	  $nick = test_input($_POST["nick"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nickErr = "Only letters and white space allowed"; 
    }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nick" value="<?php echo $nick;?>">
  <span class="error">* <?php echo $nickErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Home Address: <input type="text" name="home" value="<?php echo $home;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="number" name="num" value="<?php echo $num;?>">
  <br><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Results:</h2>";
echo $name;
echo "<br>";
echo $nick;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $gender;
echo "<br>";
echo $num;
echo "<br>";
echo $comment;
echo "<br>";
?>
</div>
</body>
  
</html>
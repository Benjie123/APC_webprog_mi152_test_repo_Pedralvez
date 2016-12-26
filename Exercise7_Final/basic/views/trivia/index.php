<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Trivias';
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
	<div class="trivia_view">
    <h1><?= Html::encode($this->title) ?></h1>

 <h2 id="header2">Trivias</br>
 <div class="box">
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script>
$(document).ready(function()
{
$("#show").click(function(){
    $("answers").toggle(500);
});
});
</script>
<br>
<br>
<ul>
<strong><h1 style="text-align:center; color:White; font-family:comic sans ms">
<?php foreach ($trivia as $trivias): ?>
    <li>
        <?= Html::encode("{$trivias->trivia}") ?>:
        <h5>Answer: </h5>

        <answers style=display:none><strong><?= Html::encode("({$trivias->answer})") ?> </strong></answers>
        <br>
    </li>
<?php endforeach; ?>
  <button id="show">Show all answer</button>

</ul>
</body>
</br>
</br>
</br>
</br>
 </tr>
 </center>
 </td>
 </tr>
</table>
</div>


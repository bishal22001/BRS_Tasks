<?php include "header.php" ?>
<h1> 3.1 Write a simple PHP script to print your information (Name and your groupid)  </h1>
<?php
echo"Bishal Ram Shrestha<br>";
echo "BBCAP22";
?>
<h1>3.2 Write PHP code to display the following message.</h1>
<?php
echo "Hello world! My name is \"David\""; 
?>
<h1>3.3 Write the PHP code in to display the current date. </h1>
<?php echo date("d.m.Y") ?>
<?php include "footer.php" ?>
<h3> 3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document</h3> 
<?php 
$title1 = "PHP is interesting";
 echo "<h1>" . $title1 . "</h1>";
 ?>
<h3> 3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade. Your table should look like the one below.</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<th> S.N </th><th>Pekka </th><th> $g1 </th>
</tr>
<th> S.N </th><th> Johanna </th><th> $g2 </th>
</tr>
<th> S.N </th><th> Jhon </th><th> $g3 </th>
</tr>
</table>
";
?>

<h3> 4.Take a screenshot that verifies </h3>
<img src="image.png" alt="">
<?php include"footer.php"?>
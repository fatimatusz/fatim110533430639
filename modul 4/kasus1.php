<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Data Seleksi</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    genre music : 
    <select name="th"> 
      <option value="POP">POP
      <option value="ROCK">ROCK
      <option value="JAZZ">JAZZ
      <option value="MUSIC"selected="
      <?PHP
	  if ($_post['th']=="POP"){
		  echo 'selected="selected"';}
      ?>">MUSIC
      <option value="POP">POP 
      <option value="ROCK">ROCK 
      <option value="JAZZ">JAZZ
      <option value="HIP-HOP">HIP-HOP
      <option value="POP-ROCK">POP-ROCK 
      <option value="Remix">Remix
    </select> <br /> 
 
    <input type="submit" value="ok" /> 
  </form> 
 
<?php 
if (isset($_POST['th'])) { 
  echo $_POST['th']; 
} 
?> 
</body>
</html>
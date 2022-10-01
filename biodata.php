<html>
<head>
<title>BIODATA</title>
</head>
    <body>
    <form action=" "method="get">
<hr>
Name: <input type=text name="name1"><br>
    Address: <textarea> name="address" id="adress1" </textarea><br>
    Gender:<select name="Gender" id="gender">
    <option value="male"> Male</option>
    <option value="female">female </option>
    <option> value="other">other</option>
    </select>
    <input type=submit value=Display><br>
    </form>
    
    
</body>
</html>

<?php
 if($_Get)
 {
     echo "<h1><center>Bio Data</center></h1>";
     echo "name ".$_GET["adress1"]."<br>";
     echo "gender".$_GET["gender"]."<br>";
     echo "name ".$_GET["name1"]."<br>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="FormValid.php" method="get">
    <h1><center>CUI Admission Form</center></h1>
    <br><br>
    Enter Name:<input type="text" name="username" size="30" maxlength="15"  placeholder="Capital letters.">
    <br><br><br>
    Enter Father Name:<input type="text" name="text1" size="30" maxlength="15" placeholder="Capital letters.">
    <br><br><br>
    Enter Password: <input type="password" name="password" size="30" maxlength="15" >
    <br><br><br>
    Enter CNIC: <input type="text" name="cnic" maxlength="17" 
    required placeholder="xxxxx-xxxxxxx-x" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1}">
    <br><br><br>
    Enter Email <input type="email" name="email" maxlength="50" required>
    <br><br><br>
    <select name="cities" >
        <option value="Sahiwal">Sahiwal</option>
        <option value="Okara">Okara</option>
        <option value="Lahore">Lahore</option>
        <option value="Multan">Multan</option>
        <option value="Faisalbad">Faisalbad</option>
    </select>
    <br><br><br>
    Hobbies:<input type="checkbox" checked name="Hobby" value="Cricket">Cricket
    <input type="checkbox" name="Hobby"  value="Football">Football
    <input type="checkbox" name="Hobby" value="Badminton">Badminton
    <input type="checkbox" name="Hobby" value="Vollyball">Vollyball
    <br><br><br>
    Gender:<input type="radio" name="gender" checked value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br><br>
    Select Subjects<select name="subjects" >
        <option value="English">English</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Biology">Biology</option>
        <option value="Computer">Computer</option>
    </select>
    <br><br><br>
    colors:<input type="text" list="colors">
   <datalist id="colors">
    <option value="red">red</option>
    <option value="green">green</option>
    <option value="blue">blue</option>
   </datalist>
    <br><br><br>
    for date: <input type="date" name="date" >
   <br><br><br>
   Give Your Feedback:-
   <br><textarea name="feedback"cols="20" rows="5"></textarea>
    <br><br><br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>
</body>
</html>
<?php
if (isset($_GET['username'])) {
    echo "Your name is {$_GET['username']} <br>";
}
if (isset($_GET['password'])) {
    echo "Your password is {$_GET['password']} <br>";
}
if (isset($_GET['cnic'])) {
    echo "Your CNIC is {$_GET['cnic']} <br>";
}
if (isset($_GET['email'])) {
    echo "Your Email is {$_GET['email']} <br>";
}
if (isset($_GET['cities'])) {
    echo "Your City is {$_GET['cities']} <br>";
}
if (isset($_GET['Hobby'])) {
    echo "Your Hobby is {$_GET['Hobby']} <br>";
}
if (isset($_GET['gender'])) {
    echo "Your gender is {$_GET['gender']} <br>";
}
?>

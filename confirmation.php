<?php

$global_password_hash= "$2y$10impwsz96";

function main(){
if (pwVerify()){
if (valInputs()){
print("<p>Your responses show here</p>");
addData();
print("<p><a href='web_form.php'>Return to Form.</a></p>");
 };
};
};

function pwVerify(){
    global $global_password_hash;
$password = $_POST["pw"];

if ((password_verify($password, $global_password_hash)) == False){
print("<p>Password is invalid. :(</p> 
<p>Plase return to the form and try again.</p>");
return False;
} else {
return True;
};
};


function valEmail(){
$email = $_POST["email"];
if (str_ends_with($email, "@genesee.edu")){
return True;
} else {
print("<p>Email is invalid. please try again.</p>");
return False;
 };
};

function valAge(){
$age = $_POST["age"];
$valid_ages=array(
    "0-12","13-17","18-22","23-27","28-32","33-37","38-42","43-47","48-52","53-57","58-62","63-67","68+"
);
if (in_array($age,$valid_ages)){
return True;
} else {
print("<p>Age is empty.Plase return and select option.</p>");
return False;
};
};

function valGender(){
$gender = $_POST["gender"];
$valid_genders= array("m","f","nb","a","o");
if (in_array($gender, $valid_genders)){
return True;
} else {
print("<p>Gender is empty. Please set option and return.</p>");
return False;
};
};

 function valInputs(){
if (valEmail()){
if (valAge()){
if (valGender()){
return True;
};
};
};
};
 

?>
<?php

$EmailFrom = Trim(stripslashes($_POST['email']));
$EmailTo = "casalaina@gmail.com";
$Subject = "Interest in Connective SF";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$URL = Trim(stripslashes($_POST['URL'])); 
$title = Trim(stripslashes($_POST['title'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "URL(s): ";
$Body .= $URL;
$Body .= "\n";
$Body .= "title: ";
$Body .= $title;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
?>
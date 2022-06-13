<?php

if(isset($_POST["submit"])){

    $name = $_POST["name_data"];
    $email = $_POST["email_data"];
    $gender = $_POST["gender_data"];
    $dob = $_POST["dob_data"];
    $country = $_POST["country_data"];

    $data = array('Name ' => $name,'Email ' =>$email,'Gender ' =>$gender,'Date Of Birth ' =>$dob,'Country ' =>$country);

    $file= 'usercsv.csv';

    $f = fopen($file,'w');

    fwrite($f, $name);
    fwrite($f, $email);
    fwrite($f, $dob);
    fwrite($f, $gender);
    fwrite($f, $country);
        
    print_r($data);

}

fclose($f);

 

?>
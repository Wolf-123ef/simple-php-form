<h1>Your Input:</h1>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['first_name'])){
      $nameErr="Name section is required";
      echo $nameErr."<br>";
    }else{
    $name=test_input($_POST['first_name']);
    }

    if(empty($_POST['last_name'])){
    $nameErr="Name is required";
    }else{
    $name1=test_input($_POST['last_name']);
    echo "Name: ".$name." ".$name1."<br>";
    }

    if(empty($_POST['email'])){
      $emailErr="Email is required";
      echo $emailErr;
    }else{
    $email=test_input($_POST["email"]);
    echo "E-mail: ".$email."<br>";
    }

    if(empty($_POST['website'])){
      $websiteErr="";
      echo $websiteErr;
    }else{
    $website=test_input($_POST["website"]);
    echo "Website: ".$website."<br>";
    }
    
    if(empty($_POST['address'])){
      $addressErr="";
    }else{
      $address=test_input($_POST['address']);
      echo "Address: ".$address."<br>";
    }
    if(empty($_POST['comment'])){
      $commentErr="";
      echo $commentErr;
    }else{
    $comment=test_input($_POST["comment"]);
    echo "Comment: ".$comment."<br>";
    }

    if(empty($_POST['gender'])){
      $genderErr="";
      echo $genderErr;
    }else{
    $gender=test_input($_POST["gender"]);
    echo "Gender: ".$gender;
  }
  }
    function test_input($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    $nameErr=$emailErr=$websiteErr=$addressErr=$genderErr=$commentErr="";
    $name=$email=$gender=$comment=$website=$address="";
  ?>
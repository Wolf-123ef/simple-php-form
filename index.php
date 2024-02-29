<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #main{
      height: 550px;
      width: 450px;
      border: 3px solid grey;
      padding-left: 10px;
    }
    p{
      color: red;
    }h1{
      text-align: center;
    }.first{
      height: 50px;
      width: 440px;
      background-color: #702963;
      color: white;
    }input{
      border: 2px solid black;
    }textarea{
      border: 2px solid black;
      height: 50px;
      width: 350px;
      resize: none;
    }#button{
      font-size: 20px;
    }
</style>
<body>
<div id="main">
  <div class="first">
  <h1>PHP Form Example</h1>
  </div>
  <p>*required field</p>
  <form method="post" action="welcome.php">
    First-Name:<input type="text" name="first_name">*
     <br>
     <br>
     Last-Name:<input type="text" name="last_name">*
     <br>
     <br>
     E-mail:<input type="text" name="email">*
     <br>
     <br>
     Website:<input type="text" name="website">
     <br>
     <br>
     Address:<input type="text" name="address">
     <br>
     <br>
     Comment:<textarea name="comment"></textarea>
     <br>
     <br>
     Gender:<input type="radio" name="gender" value="Female">Female
     <input type="radio" name="gender" value="Male">Male
     <input type="radio" name="gender" value="Others">Others
     <br>
     <br>
     <br>
     <br>
     <input type="submit" id="button">
  </form>
  </div>
</body>
</html>
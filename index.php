<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
$nameexp=$nameexp1="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
    if (empty($_POST["username"])) 
    {  
         $nameexp = "Name is required";  
    } 
    else{
      $pattern="/^[a-zA-Z]+$/";
      $check=preg_match_all($pattern,$_POST['usernam+
      
      e']);
      if($check)
      {
        $name=$_POST['username'];
      }
      else{
        $nameexp="enter correcr pattern";
      }
    }
    if (empty($_POST["password"])) 
    {  
         $nameexp1 = "password is required";  
    } 
  }
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="text" name=" username" placeholder="username" ><br>
    <span><?php echo $nameexp; ?></span>
    <br>
    <input type="password" name="password" placeholder="password"><br> 
    <span><?php echo $nameexp1 ?></span>
    <br>
    <button type="submit" name="submit">Submit</button>
  </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP Learning</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <script> 
function validate()                                    
{ 
    var name = document.forms["sign"]["Name"];                  
    var phone = document.forms["sign"]["Mob"];  
    var gender =  document.forms["sign"]["Gender"];
    var uname = document.forms["sign"]["username"];  
    var pass1 = document.forms["sign"]["password"];
    var pass2 = document.forms["sign"]["password2"];
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        return false; 
    }    
    if (gender[0].checked == false && gender[1].checked == false)                                   
    { 
        window.alert("Please select your gender.");  
        return false; 
    }
    if (phone.value == "")                               
    { 
        window.alert("Please enter your mobile no.");  
        return false; 
    }
    var no = /^\d{10}$/;
    if(!phone.value.match(no))
    { 
        window.alert("Please enter correct mobile no.");  
        return false; 
    }   
   
    if (uname.value == "")                           
    { 
        window.alert("Please enter your user name.");  
        return false; 
    } 
   
    if (pass1.value == "")                        
    { 
        window.alert("Please enter your password");  
        return false; 
    } 
   
    if (pass2.value != pass1.value)                  
    { 
        alert("Please match your password.");  
        return false; 
    } 
   
    return true; 
}
</script>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="sign_i.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="sign_u.php" name="sign" method="POST" onsubmit="return(validate())">
        <div class="group">
          <label for="user" class="label">Name</label>
          <input id="Name" name="Name" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Gender</label>
          <input id="Gender" name="Gender" type="radio" value="Male">Male<input id="Gender" name="Gender" type="radio" value="Female">Female
        </div>
        <div class="group">
          <label for="user" class="label">Mobile-no.</label>
          <input id="Mob" name="Mob" type="text" class="input">
        </div>
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="text" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass"  name="password2" type="text" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" name = "submit" class="button" value="Submit">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>
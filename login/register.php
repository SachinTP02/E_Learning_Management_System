


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register-page</title>
  <link rel='stylesheet' href='https://fonts.gstatic.com'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,700;1,900&amp;display=swap'><link rel="stylesheet" href=".\register-page\register-page\dist\style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main class="main">
    <div class="container">
        <div class="forms">

            <div class="sign__blog">

                <form action="login.php" class="signin">
                    
                

                    <div class="profile__img__blog">
                        <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_profile_pic_ic5t.svg" alt="" class="profile">
                    </div>

                    <h2 class="title">Sign in</h2>

                    <p class="signin__text">Already a member?</p>


                    <button type="submit" name="login_user" class="btn login" id="mybutton">Login</button>
                    
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "login.php";
    };
</script>
                    
                    

                </form>
                <script>
                function register(){

                   
                    var username=document.form1.username.value;
                    var password=document.form1.password.value;
                    var button=document.form1.reg_user.value;
                    if(username==null || username=="" || password==null || password="" || buttom==null || button==""){
                        alert("usesrname cannot be blank");
                        return false;
                    }
                    

                }
                </script>

                <form method="post" action="gateway.php" class="register" name="form1">
                

                    <div class="profile__img__blog">
                        <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_profile_pic_ic5t.svg" alt="" class="profile">
                    </div>
                    <h2 class="title">Register</h2>  
                     <div><?php include 'respond.php';?></div>
                    <div class="input__blog">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required="required">
                        
                    </div>
                    <div class="input__blog">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="E-Mail" type="email" name="email" required="required">
                        
                    </div>               
                                      
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="text" name="regno" placeholder="Register Number" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="text" name="rollno" placeholder="Roll Number" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="text" name="stream" placeholder="Stream" required="required">
                    </div>                   
                    <input type="submit" name="reg_user" value="Register" class="btn login" onclick="validateform()">
                    

                </form>

            </div>

        </div>
        <script>
        function validateForm() {
    var x = document.forms["reg_user"]["password"].value;
    var y = document.forms["reg_user"]["confirm_password"].value;
    if(x!=y){
      alert("Enter same password");
      return false;
    }
  
    }</script>

        <div class="panels__blog">

            <div class="panel left__panel">

                <div class="content">

                    <h3 class="panel__title">New here ?</h3>
                    <p class="panel__text">SIGN UP and join us </p>
                    <button class="btn transparent" id="register__btn">Register</button>

                </div>
                <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_Login_re_4vu2.svg" alt="" class="panel__img">
            </div>

            <div class="panel right__panel">

                <div class="content">

                    <h3 class="panel__title">Already have account</h3>
                    <p class="panel__text">SIGN IN</p>
                    <button class="btn transparent" id="signin__btn">Sign in</button>

                </div>
                <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_authentication_fsn5.svg" alt="" class="panel__img">
            </div>

        </div>

    </div>
</main>
<!-- partial -->
  <script  src=".\register-page\register-page\dist\script.js"></script>

</body>
</html>

<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dashboard.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="./logo.png" alt="" />
                    <span class="nav-item"><?php echo "Hi " . $_SESSION['email']?></span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="studentprofile.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="https://cucek.cusat.ac.in/">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">CUCEK-HOME</span>
                </a></li>
                <li><a href="https://cusat.ac.in/">
                <i class="fas fa-tasks"></i>
                    <span class="nav-item">CUSAT-HOME</span>
                </a></li>
                <li><a href="settings.php">
                <i class="fas fa-cog"></i>
                    <span class="nav-item">Settings</span>
                </a></li>
                <li><a href="help.php">
                <i class="fas fa-question-circle"></i>
                    <span class="nav-item">Help?</span>
                </a></li>
                <li><a href="login.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>ENGINEERING BRANCHES :</h1>
                <i class="fas-fa-user-cog"></i>
            </div>
                <div class="main-skills">
                    <div class="card">
                        
                        <h3>Information Technology Engineering</h3>
                        <p>Technology is best when it brings people together!</p>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                        
                        <h3>Computer Science Engineering</h3>
                        <p>computer science is no more about computers than astronomy is about telescopes!</p>
                        <button>Get Started</button> 
                    </div>
                
                    <div class="card">
                        
                        <h3>Electronics and Communication Engineering</h3>
                        <p>In the world of fluctuations,be someone's regulator!</p>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                        
                        <h3>Electrical and Electronics Engineering</h3>
                        <p>Peace be Amplified,World be Rectified!</p>
                        <button>Get Started</button> 
                    </div>
                
                    <div class="card">
                      
                        <h3>Mechanical Engineering</h3>
                        <p>When the mechanical rest,the World rust.!</p>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                       
                        <h3>Civil Engineering</h3>
                        <p>The road to Success is always Under construction!</p>
                        <button>Get Started</button> 
                    </div>
                </div>
        </section>
    </div>


</body>
</html>
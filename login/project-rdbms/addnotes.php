<?php

include_once 'database.php';
session_start();
if(!(isset($_SESSION['email'])))
{
    header("location:login.php");
}
else
{
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    include_once 'database.php';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Dashboard | Note System</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/welcome.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>

<body>
<nav class="navbar navbar-default title1">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Javascript:void(0)"><b>Notes</b></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li <?php if(@$_GET['p']==0) echo'class="active"'; ?>><a href="dashboard2.php?q=0">TEACHER PAGE<span class="sr-only">(current)</span></a></li>
                <li class="dropdown <?php if(@$_GET['p']==4 || @$_GET['p']==5) echo'active"'; ?>">
                <li><a href="addnotes.php?p=4">Add Notes</a></li>
                <li><a href="addnotes.php?p=5">Remove Notes</a></li>
                <li><a href="dashboard.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li <?php echo''; ?> > <a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
if(@$_GET['p']==4 ) 
                    {
                        echo '<div class="row"><span class="title1" style="margin-left:40%;font-size:30px;color:#fff;"><b>Enter Note Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6">   
                        <form class="form-horizontal title1" name="form" action="update2.php?p=4"  method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=note_id"></label>  
                                    <div class="col-md-12">
                                        <input id="note_id" name="note_id" placeholder="Enter Note ID" class="form-control input-md" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="note_name"></label>  
                                    <div class="col-md-12">
                                        <input id="note_name" name="note_name" placeholder="Enter title" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="stream"></label>  
                                    <div class="col-md-12">
                                        <input id="stream" name="stream" placeholder="Enter Stream" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="semester"></label>  
                                    <div class="col-md-12">
                                        <input id="semester" name="semester" placeholder="Enter Semester" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="subject"></label>  
                                    <div class="col-md-12">
                                        <input id="subject" name="subject" placeholder="Enter Subject" class="form-control input-md" min="0" type=text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="module"></label>  
                                    <div class="col-md-12">
                                        <input id="module" name="module" placeholder="Enter Module" class="form-control input-md" min="0" type=number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="file"></label>  
                                    <div class="col-md-12">
                                        <input id="file" name="file" placeholder="Enter Note [PDF]" class="form-control input-md" min="0" type="file" accept="pdf">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="teacher"></label>  
                                    <div class="col-md-12">
                                        <input id="teacher" name="teacher" placeholder="Enter your name" class="form-control input-md" min="0" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12"> 
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" class="btn btn-primary"  value="Submit">
                                    </div>
                                </div>

                            </fieldset>
                        </form></div>';
                    }
                ?>
                 
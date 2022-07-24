
  <?php
  include_once 'database.php';
  session_start();
  
  
  if(isset($_SESSION['key']))
  {
    if(@$_GET['q']== '4' && $_SESSION['key']=='admin') 
    {
      $note_id = $_POST['note_id'];
      $note_name = $_POST['note_name'];
      $stream = $_POST['stream'];
      $semester = $_POST['semester'];
      $module = $_POST['module'];
      $file = $_POST['file'];
      $teacher = $_POST['teacher'];
     
      $q3=mysqli_query($con,"INSERT INTO notes VALUES  ('$note_id','$note_name','$stream' ,'$semester' , '$module' , '$file','$teacher', NOW())");
      header("location:addnotes.php");
    }
  }

  ?>

  



<?php
include('connection.php');
?>
<?php require('inc/header.php');?>
<link rel="stylesheet" href="css/feedback.css">
<?php require('inc/navbar.php');?>


<section id="feedback">
</section>
<section id="feedback-form">
    <p class="feedback_head">Write Your Feedback</p>
    <form action="feedback.php" method="post">
       <input type="text" name="name" placeholder="Enter  Name" required>
       <input type="email" name="email" placeholder="Enter  email" required>
       <input type="text" name="feedback" placeholder="Enter  Feedback">
       <input type="submit" name="submit">
    </form>
    <?php
       if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $email = $_POST['email'];
           $feedback=$_POST['feedback'];

           $query="SELECT * FROM feedbacks WHERE email='$email'";
           $result=mysqli_query($con,$query);
           $data=mysqli_fetch_assoc($result);
           if($result)
           {
if($data['email']!=$email)
{      
           $qry="INSERT INTO feedbacks(name,email,feedback ) VALUES ('$name','$email','$feedback')";
           $run=mysqli_query($con,$qry);
           if($run==true)
           {
               ?>
               <script>
                   alert("Thank You For Your Feedback");
               </script>
               <?php
           }
           
        }
        else{
          echo "<script>
          alert('Sorry! You can give feedback only once');
          window.location.href='feedback.php';
          </script>";
        }
     }
     else{
      echo "<script>
      alert('cannot Run');
      window.location.href='contact.php';
      </script>";
    }
       }
    ?>
</section>

    <?php require('inc/script.php');?>
    <?php require('inc/footertag.php');?>
    

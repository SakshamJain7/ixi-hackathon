<!DOCTYPE html>
<?php
  
   include("database.php");
?>

<html>
        <head>
        	<title>Marking</title>
        </head>
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.min.css">


<body>
	
    <div class="col-lg-8 m-auto d-block">
	  <h3>Welcome to the C++ Course!</h3> 
       

       <form action="check.php" method="post">
       

       <?php

       for($i = 1; $i < 6; $i++){
           $q = "select * from question where qid = $i ";
           $query = mysqli_query($con,$q);

           while($rows = mysqli_fetch_array($query)){  
       ?>

         <div>
             <h4><?php echo $rows['question'] ?></h4>
            
        <?php
              $q = "select * from answers where ans_id = $i ";
              $query = mysqli_query($con,$q);

           while($rows = mysqli_fetch_array($query)){           

         ?>      

          <div>
              <input type="radio" name="quizcheck[]" value="<?php $rows['aid'] ?>">
              <?php echo $rows['answer'] ?>
          </div>


       <?php  }
          }
        }
       ?>

      <input type="submit" name="submit" class="btn btn-success m-auto d-block">


   </form>
</div>

   </div>
	  
</body>
</html>
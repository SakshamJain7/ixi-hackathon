<?php

  include("database.php");
  ?>

  <form action="" method="post" style="padding-top: 100px;padding-left: 270px">

	<b> <h1>Insert Answer</h1></b>
	<br><br>
	<p style="margin-left: 45px">insert aid : <input type="text" name="new_aid"></p>
	<br>

	<p style="margin-left: 45px">insert Answer : <input type="text" name="new_ans"></p>
	
	<br>
	<p style="margin-left: 45px">insert ans_id : <input type="text" name="new_ans_id"></p>
	<br>
	
	<p style="margin-left: 75px"><input type="submit" name="add_ans" value="Add Answer"></p>
	
</form>

<?php

   if(isset($_POST['add_ans'])){

   	 $new_aid = $_POST['new_aid'];
     $new_ans = $_POST['new_ans'];
     $new_ans_id = $_POST['new_ans_id'];

     $insert_ans = "insert into answers values ('$new_aid','$new_ans','$new_ans_id')";

     $run_ans = mysqli_query($con, $insert_ans);

     if($run_ans){

     	echo "<script>alert('New question has been inserted')</script>";
     	// echo "<script>window.open('index.php?view_cats','_self')</script>";
     }

 }
?>

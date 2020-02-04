<?php

  include("database.php");
  ?>


<form action="" method="post" style="padding-top: 100px;padding-left: 270px">

	<b> <h1>Insert New Question</h1></b>
	<br><br>
	<p style="margin-left: 45px">insert qid : <input type="text" name="new_qid"></p>
	<br>

	<p style="margin-left: 45px">insert Question : <input type="text" name="new_ques"></p>
	
	<br>
	<p style="margin-left: 45px">insert ans_id : <input type="text" name="new_ans_id"></p>
	<br>
	
	<p style="margin-left: 75px"><input type="submit" name="add_ques" value="Add Question"></p>
	
</form>



<?php

   if(isset($_POST['add_ques'])){

   	 $new_qid = $_POST['new_qid'];
     $new_ques = $_POST['new_ques'];
     $new_ans_id = $_POST['new_ans_id'];

     $insert_ques = "insert into question values ('$new_qid','$new_ques','$new_ans_id')";

     $run_ques = mysqli_query($con, $insert_ques);

     if($run_ques){

     	echo "<script>alert('New question has been inserted')</script>";
     	// echo "<script>window.open('index.php?view_cats','_self')</script>";
     }

 }
?>

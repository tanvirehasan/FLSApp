<?php 

	session_start(); 
	include 'inc/header.php';

 ?>



<div class="mcqbody">

	<h3>Time: 5 minutes</h3>
	<h4>This fun QUIZ is based on “Workshop Success Formula” article we shared with you!</h4>

	<form action="marks.php" method="post">
		<h4>1. In the article, IR (improved results) is presented in which context(s):</h4>
		<span><input type="radio" name="q1" value="A">A) Organizational</span><br>
		<span><input type="radio" name="q1" value="B">B) Personal </span><br>
		<span><input type="radio" name="q1" value="C">C) Both A & B	</span><br>
		<span><input type="radio" name="q1" value="D">D) None of the choices</span><br>

		<h4>2. Which statement is correct based on the reading of the article?</h4>
		<span><input type="radio" name="q2" value="A">A) Attitudes (A) plus Skills & Knowledge (S+K) directed by Objectives (O) delivers Positive Behavior Change (PBC)</span><br><br>
		<span><input type="radio" name="q2" value="B">B) Attitudes (A) plus Skills & Knowledge (S+K) directed by Plans (P) delivers Positive Behavior Change (PBC) </span><br><br>
		<span><input type="radio" name="q2" value="C">C)	Attitudes (A) plus Skills & Knowledge (S+K) directed by Mission (M) delivers Positive Behavior Change (PBC)</span><br><br>
		<span><input type="radio" name="q2" value="D">D)	Attitudes (A) plus Skills & Knowledge (S+K) directed by Goals (G) delivers Positive Behavior Change (PBC)</span><br>


		<h4>3.	Goals provide _ _ _ _ _ _ _ _, otherwise there is no direction.</h4>
		<span><input type="radio" name="q3" value="A">A) energy</span><br>
		<span><input type="radio" name="q3" value="B">B) way  </span><br>
		<span><input type="radio" name="q3" value="C">C) strategy	</span><br>
		<span><input type="radio" name="q3" value="D">D) focus</span><br>

		<h4>4. Which statement is correct according to the article?</h4>
		<span><input type="radio" name="q4" value="A">A) Attitude is more of a multiplier of positive behavior change </span><br><br>
		<span><input type="radio" name="q4" value="B">B)	Attitude is more of a multiplier of objectives and goals  </span><br><br>
		<span><input type="radio" name="q4" value="C">C)	Attitude is more of a multiplier of skills and knowledge	</span><br><br>
		<span><input type="radio" name="q4" value="D">D)	Attitude is more of a multiplier of mission and vision </span><br>

		<h4>5.	According to the article, following is the right sequence of getting results:</h4>
		<span><input type="radio" name="q5" value="A">A) PERFORMING, STRIVING, ACHIEVING</span><br>
		<span><input type="radio" name="q5" value="B">B) PERFORMING, ACHIEVING, CELEBRATING </span><br>
		<span><input type="radio" name="q5" value="C">C) STRIVING, PERFORMING, ACHIEVING	</span><br>
		<span><input type="radio" name="q5" value="D">D) HARDWORKING, ACHIEVING, CELEBRATING</span><br>

		<input type="submit" name="submit" value="submit">

	</form>

</div>


<?php include 'inc/footer.php'; ?>

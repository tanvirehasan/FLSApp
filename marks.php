<?php 
session_start(); 
  include 'inc/header.php'; ?>

 <div class="mcqbody">

    <?php            
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];        
        $totalCorrect = 0; 
?>                        
  

 <div class="onetoten">

        <h3>RESULT</h3> 
        <h2></h2>
            <table class="mcqt">
              <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
              </tr>
              <tr>
                <td><?php if ($answer1 == "C") { $totalCorrect++; echo "<i id='green' class='fas fa-check '></i>"; }else{echo " <i id='red'  class='fas fa-times '></i> ";}?></td>
                <td><?php if ($answer2 == "D") { $totalCorrect++; echo "<i id='green'  class='fas fa-check '></i>"; }else{echo "<i id='red' class='fas fa-times '>";}?></td>
                <td><?php if ($answer3 == "D") { $totalCorrect++; echo "<i id='green'  class='fas fa-check '></i>"; }else{echo "<i id='red'  class='fas fa-times '>";}?></td>
                <td><?php if ($answer4 == "C") { $totalCorrect++; echo "<i id='green'  class='fas fa-check '></i>"; }else{echo "<i id='red' class='fas fa-times '>";}?></td>
                <td><?php if ($answer5 == "C") { $totalCorrect++; echo "<i id='green'  class='fas fa-check '></i>"; }else{echo "<i id='red' class='fas fa-times '>";}?></td>
              </tr>
             </table> 

            <h3>Correct Answer</h3> 
            <h2></h2>
             <table class="mcqt">
                 <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                 </tr>
                 <tr>
                     <td>C</td>
                     <td>D</td>
                     <td>D</td>
                     <td>C</td>
                     <td>C</td>
                 </tr>
             </table>

    <div class="avgr"style="background-color:none;" >
        <h2><?php echo $totalCorrect;?></h2>
        <p>Your Marks</p>       
    </div>

   <div class="tryag"> <a href="mcq.php">Try Again</a></div>

    </div>
</div>
<?php include 'inc/footer.php'; ?>


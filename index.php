<?php 

	session_start(); 

    if(!isset($_SESSION['logged_in'])){      
        header('location:login.php');
    }else{

    		include '1t010.php';
    	    	
     }
?>

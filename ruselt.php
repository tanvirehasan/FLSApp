<?php 
	session_start(); 

	include 'inc/header.php';
?>

<script type="text/javascript">
	function autoload() {
		$('#ruslet').load("inc/1t10result.php").show();
	}
	setInterval('autoload()',1000);
</script>

<div id="ruslet"></div>

<?php include 'inc/footer.php'; ?>
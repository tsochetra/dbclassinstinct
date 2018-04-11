<!-- 
	* @source code designed by Muhsin Mohamed Pc for http://www.howi.in
	* Report bugs and errors to waphunt@gmail.com
	* @This script was coded with the help of many other github projects. I thanks to them
	* @Take backup before editing the script
-->
<!DOCTYPE html>
<html>
<head>
<title>CKEditor Embeded Demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
</head>
<body>
<div class="w3-container w3-blue">
  <h2>CKEditor Demo View</h2>
  <p>Use the maximum functionality from the below CKEditor</p>
  
</div>
<hr>

<div class="w3-container w3-light-blue"> 
  <p>
  <form action="#" method="POST">
  <textarea name="text" id="text">Write What Ever You Want</textarea>
	<script>
		CKEDITOR.replace( 'text' );
	</script>
	<br>
	<button class="w3-btn w3-light-grey w3-border" name="submit">Submit</button>
  </p>
</div>
<hr>

<article class="w3-container"> 
  <h2>Result Will Like This :</h2>
  <?php 
	if(isset($_POST['submit']))
	{
		$text=$_POST['text'];
	}
  ?>
  <p><?php if(isset($_POST['submit'])){echo $text;} else{echo "You Wrote Nothing";} ?></p>
</article>
<hr>


</body>
</html>
<!-- 
	* @source code designed by Muhsin Mohamed Pc for http://www.howi.in
	* Report bugs and errors to waphunt@gmail.com
	* @This script was coded with the help of many other github projects. I thanks to them
	* @Take backup before editing the script
-->
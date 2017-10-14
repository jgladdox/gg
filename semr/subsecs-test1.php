<!-- -->
<p>22</p>
<?php echo "Today is " . date("m/d/y ") . "<br>"; ?>

 <?php  if ($_REQUEST[urlsubsec] == 'subsec-page01') { // 
    
	include('includes/emr-content/subsec-page01.html');  }
	
	else { echo "<br />
    <strong>sorry, this content is not yet available 2</strong>"; }
	
   ?>
   
   <?php  if ($_REQUEST[urlsubsec] == 'subsec-page02') { // 
	include('includes/emr-content/subsec-page02.html');  }
	else { echo "<br />
    <strong>sorry, this content is not yet available 3</strong>"; }
   ?>
   
    <?php  if ($_REQUEST[urlsubsec] == 'subsec-page03') { // 
	include('includes/emr-content/subsec-page03.html');  }
	else { echo "<br />
    <strong>sorry, this content is not yet available 3</strong>"; }
   ?>
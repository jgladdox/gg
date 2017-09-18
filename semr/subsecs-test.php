<!-- -->
 <?php  if ($_REQUEST[urlsubsec] == 'hosp_progress01') { // 
    
	include('includes/emr-content/hosp_progress01.html');  }
	
	else { echo "<br />
    <strong>sorry, this content is not yet available 2</strong>"; }
	
   ?>
   
   <?php  if ($_REQUEST[urlsubsec] == 'nursing_report01') { // 
	include('includes/emr-content/nursing_report01.html');  }
	else { echo "<br />
    <strong>sorry, this content is not yet available 3</strong>"; }
   ?>
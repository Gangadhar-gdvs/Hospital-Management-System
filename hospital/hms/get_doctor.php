<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{
     $link=mysqli_connect("localhost","root",'',"hms");
 $sql=mysqli_query($link,"select doctorName,id from doctors where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}
}


if(!empty($_POST["doctor"])) 
{
       $link=mysqli_connect("localhost","root",'',"hms");
 $sql=mysqli_query($link,"select docFees from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

echo "<h1> .Hello World. </h1>";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Attendance Report</title>
	
	<link rel="stylesheet" type="text/css" href="css/ivory.css" media="all">
	
	
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<!-- For Date picker only -->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	
	<!--<script type="text/javascript" language="javascript" src="TableFilter/tablefilter.js"></script>  -->
	<script type="text/javascript" language="javascript" src="TableFilter/tablefilter_all.js"></script>
	<script type="text/javascript" language="javascript" src="TableFilter/tablefilter_all.min.js"></script>  
	<!-- For Date picker only -->
	
	<script>
	  $(document).ready(function() {
	    
	     $("#datepicker1").datepicker({ dateFormat: "yy-mm-dd"});
		$("#datepicker2").datepicker({ dateFormat: "yy-mm-dd"});
	  });
	</script>
		<style type="text/css">
		 #maintable td.orange {color: #ff9933;}
		#maintable td.blue {color:#00F;}

		</style>
	<style>
		.content{width: 100%; height: auto; background-color: #EBEAE8; padding: 30px 12px;}
	.note {
		background-color: #ffffff; 
		padding: 10px 0; 
		color: #333333; 
				border-radius:5px; 
		   -moz-border-radius:5px; 
		-webkit-border-radius:5px;
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	       -moz-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	}

	
	button:active { background-color: fuchsia; }
	
	.hidden 
	{
   		 border: none;
   		 visibility: hidden;
	}
	
	
	 #round-image
	 {
   		border-radius: 100%;
   		-o-border-radius: 100%;
   		-webkit-border-radius: 100%;
   		-moz-border-radius: 100%;
	}
	</style>
	
<!--	<script language="javascript" type="text/javascript">  -->
<!--    //<![CDATA[-->
<!--        -->
<!--        var table4_Props =  {-->
<!--		 paging: true,  -->
<!--                    paging_length: 3,  -->
<!--                    rows_counter: true,  -->
<!--                    rows_counter_text: "Rows:",  -->
<!--                    btn_reset: true,  -->
<!--                    loader: true,  -->
<!--                    loader_text: "Filtering data..."  ,-->
<!--                    col_0: "select",  -->
<!--                        on_change: false,  -->
<!--                        btn: true,  -->
<!--                        enter_key: false-->
<!--		-->
<!--		-->
<!--			-->
<!--                    }  -->
<!--        var tf4 = setFilterGrid( "table1",table4_Props );  -->
<!--    //]]>  -->
<!--    </script>-->
	

	<script language="javascript" type="text/javascript">  
    //<![CDATA[  
        var table6_Props =  {  
                        paging: true,  
                        paging_length: 3,  
                        rows_counter: true,  
                        rows_counter_text: "Rows:",
			btn_reset: true,  
                        loader: true,  
                        loader_text: "Filtering data..."  
                    };  
        var tf6 = setFilterGrid( "table1",table6_Props );
	
    //]]>  
    </script>  
	
	<script type="text/javascript">
    	function noBack() 
	{
		 window.history.forward(); 
	}
   	noBack();
   	window.onload = noBack;
   	window.onpageshow = function (evt) { if (evt.persisted) noBack(); }
   	window.onunload = function () { void (0); }
	</script>	

	
	
	
	<!--<script language="javascript" type="text/javascript">  -->
	<!--	var tf = setFilterGrid("table1");-->
	<!--	-->
	<!--</script>-->
	
<!--	    <script language="javascript" type="text/javascript">  -->
<!--    //<![CDATA[  -->
<!--        var table9_Props = {  -->
<!--                        paging: true,  -->
<!--                        paging_length: 1,  -->
<!--                        results_per_page: ['# rows per page',[1,2,3]],-->
<!--			rows_counter: true,  -->
<!--                        rows_counter_text: "Rows:",  -->
<!--                        btn_reset: true,  -->
<!--                        btn_next_page_html: '<a href="javascript:;" style="margin:3px;">Next ></a>',  -->
<!--                        btn_prev_page_html: '<a href="javascript:;" style="margin:3px;">< Previous</a>',  -->
<!--                        btn_last_page_html: '<a href="javascript:;" style="margin:3px;"> Last >|</a>',  -->
<!--                        btn_first_page_html: '<a href="javascript:;" style="margin:3px;"><| First</a>',  -->
<!--                        loader: true,  -->
<!--                        loader_html: '<h4 style="color:red;">Loading, please wait...</h4>'  -->
<!--                    };  -->
<!--        var tf9 = setFilterGrid( "table1",table9_Props );  -->
<!--    //]]>  -->
<!--    </script>-->
	    
	 <script language="javascript" type="text/javascript">  
		var tf = setFilterGrid("table1");
		
		
	</script>

	<script language="javascript" type="text/javascript">  
		
	</script>
	
	
	
	
</head>
<body>
<?php
	include('config.php');

				function seconds_from_time($time) 
				{
    					list($h, $m, $s) = explode(':', $time);
   					return ($h * 3600) + ($m * 60) + $s;
				}
				function time_from_seconds($seconds) 
				{
    					$h = floor($seconds / 3600);
    					$m = floor(($seconds % 3600) / 60);
    					$s = $seconds - ($h * 3600) - ($m * 60);
    					return sprintf('%02d:%02d:%02d', $h, $m, $s);
				}

?>
<form name="form_update" method="post" action="">	
	<div class="row">
		<h1 class="text-center"> Attendance Details</h1>
	</div>
	<div class="content">
	<p align="left"><a href="viewadmin.php" >Back</a>
	
	<a href="logout.php"><button type="button" style="float:right;" class="magenta" onclick="logout.php">logout</button></a>
	
	<a style="float:right;" href="reportTotal.php">Refresh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	
        <div class="row space-bot">
<?php


				
$con=mysqli_connect("localhost","root","root123","db_aakash_attendance");
// Check connection
$i=0;
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
  }
else
{	
$sql =mysqli_query($con,"SELECT uname FROM tb_user");

$num_rows = mysqli_num_rows($sql);?>

<!-- <label><b>NAME</b></label> -->
<?php
if($numrow =='0')
{
    echo "No results found.";
}
else
{
?>	
	<!--<table style="border:hidden">-->
	<tr>
	<td>
<?php	
	echo "<select name= 'selectvar'>";
	echo '<option value="" >'.'--- Please Select Person ---'.'</option>';

	while($info = mysqli_fetch_array($sql))                                                     
	{
   	echo '<option value="'.$info['uname'].'">'.$info['uname'].'</option>';
   	$i++;
	}
	echo '</select>';
	?>
	
<?php 
}	

}
?>
	
	
	<input type="text" name= "ip1" id="datepicker1" placeholder="From" />
	<input type="text" name= "ip2" id="datepicker2" placeholder="To" />
	
	<button type="submit" class ="magenta" value ="time" name= "timer" id="time">Check Now! </button></td>
	</tr>
	
	<!--</table>-->

	<hr>

<?php 

$f_usr=$_POST["selectvar"];
$f_usr1=$_POST["ip1"];
$f_usr2=$_POST["ip2"];
$j=1;
 
$k=0;
?>
</br>
	</br>
	<table id="table1" cellspacing="0" class="mytable filterable" >  
	<tr><th><b>Name</b></th><th><b>Date</b></th><th><b>Day</b></th><th ><b>Check-In</b></th><th><b>Check-Out</b></th>
	<th><b>Total Working Hours</b></th></tr>
<?php

 

if ($f_usr == "" && $f_usr1 == "" && $f_usr2 == "")
{
echo "Today's Attendance";
$k=1;
$sql =mysqli_query($con,"SELECT uname,att_date,att_check_in,att_check_out,att_diff,att_status FROM tb_attendance t1,tb_user t2 WHERE t1.att_date = curDate() AND t2.uid=t1.att_uid ");

}
elseif($f_usr1 == "" && $f_usr2 == "")
{
$k=1;
//echo "Today Attendance with particular name";
?> 
	<p><?php echo $f_usr; ?>'s today attendance</p>

<?php
$sql =mysqli_query($con,"SELECT uname,att_date,att_check_in,att_check_out,att_diff,att_status FROM tb_attendance t1,tb_user t2 WHERE uname='$f_usr' AND t2.uid=t1.att_uid AND t1.att_date = curDate()");
}
elseif($f_usr == "" && $f_usr1!="" && $f_usr2!="")
{
$k=2;

//echo "From and to Date specified ";

$timestamp1= strtotime("$f_usr1");
$timestamp2= strtotime("$f_usr2");
$day1 = date('l', $timestamp1);
$day2 = date('l', $timestamp2);
$d=$timestamp1+86400;
if(($day1=="Saturday")&&($timestamp2==$d))
{
	
	echo'<script language="javascript"> alert("Both are HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';	
}
elseif(($f_usr1==$f_usr2)&&(($day1=="Saturday")||($day1=="Sunday")))
{
	echo'<script language="javascript"> alert("Its a HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
}elseif($timestamp2<$timestamp1)
{
	echo'<script language="javascript"> alert("Enter the correct value for TO and FROM field");window.location = "reportTotal.php"</script>';
}

$sql =mysqli_query($con,"SELECT DISTINCT uname FROM tb_attendance t1,tb_user t2 WHERE t1.att_uid=t2.uid AND t1.att_date BETWEEN '$f_usr1' AND '$f_usr2'");
	
	while($info=mysqli_fetch_array($sql))
	{
		
		$var=$info['uname'];
		
		$sql1=mysqli_query($con,"SELECT DISTINCT att_date FROM tb_attendance t1, tb_user t2 WHERE t2.uname = '$var' AND t1.att_date BETWEEN '$f_usr1' AND '$f_usr2' AND t1.att_uid = t2.uid ");
	
		while($info1=mysqli_fetch_array($sql1))
		{
			$vardate=$info1['att_date'];

			
			$sql2=mysqli_query($con,"SELECT uname, att_date,MIN(att_check_in),SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff))),att_status FROM tb_attendance t1,tb_user t2 WHERE t1.att_date = '$vardate' AND t2.uname = '$var' AND t2.uid = t1.att_uid");
			
			$sql3=mysqli_query($con,"SELECT att_check_out FROM tb_attendance t1,tb_user t2 WHERE t2.uname='$var'AND t1.att_date='$vardate' AND t1.att_uid=t2.uid");
			$num_row3 = mysqli_num_rows($sql3);
			$info2=mysqli_fetch_array($sql2);
			$x=0;
			
			while($info3=mysqli_fetch_array($sql3))
			{
				
				$x=$info3['att_check_out'];
			
			}
			
				if($x=="00:00:00")
				{
?>
					<tr style='background-color:Thistle';>
					
<?php				}
				else
				{
?>
					<tr>
<?php
				}
				
?>
				<td align="center" > <?php echo $var; ?> </td>
				<td align="center" > <?php echo $info2['att_date']; ?> </td>
<?php
				$p=$info2['att_date'];
				$timestamp2= strtotime("$p");
				$day1 = date('l', $timestamp2);
?>
				<td align="center" > <?php echo $day1; ?> </td>
				<td align="center" > <?php echo $info2['MIN(att_check_in)']; ?> </td>
<?php			
				
				if($x=="00:00:00")
				{
?>
				<td align="center"class = "warning" > <?php echo $x; echo "&nbsp;&nbsp;&nbsp;Forgot to check out" ;?> </td>
<?php				}
				else
				{
?>
				<td align="center" > <?php echo $x; ?> </td>
<?php
				}
				
				$m=$info2['SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff)))'];
				if($m < "07:00:00")
				{
					
?>					<td align="center"class = "warning" > <?php echo $info2['SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff)))'] ?> </td>
					</tr> 	
<?php				}
				else
				{
?>
				<td align="center" ><?php echo $info2['SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff)))']?> </td>	
				</tr>
				
<?php				}
		}
	}

}
elseif(($f_usr2 == "" && $f_usr!="" && $f_usr1!="" )||($f_usr1 == "" && $f_usr!="" && $f_usr2!=""))
{
//echo "Particular name attendance on particular date";
echo "$f_usr";
$k=2;
	if($f_usr2!="")
	{
		$tempdate=$f_usr2;
		$timestamp2= strtotime("$f_usr2");
		$day2 = date('l', $timestamp2);
		if(($day2=="Sunday")||($day2=="Saturday"))
		{
			echo'<script language="javascript"> alert("Its a HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
		}
		
	}
	elseif($f_usr1!="")
	{
		$tempdate=$f_usr1;
		$timestamp1= strtotime("$f_usr1");
		$day1 = date('l', $timestamp1);
		if(($day1=="Sunday")||($day1=="Saturday"))
		{
			echo'<script language="javascript"> alert(" Its a HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
		}
	}

	$sql = mysqli_query($con,"SELECT uname,att_date,att_check_in,att_check_out,att_diff,att_status FROM tb_attendance t1,tb_user t2 WHERE uname='$f_usr' AND t2.uid=t1.att_uid AND att_date ='$tempdate'");

	$sql1 = mysqli_query($con,"SELECT att_diff FROM tb_attendance t1,tb_user t2 WHERE uname='$f_usr' AND t2.uid=t1.att_uid AND att_date ='$tempdate'");


$num_rows = mysqli_num_rows($sql);
$num_rows1 = mysqli_num_rows($sql1);
$info = mysqli_fetch_array($sql);    
	if($num_rows!=0)
	{   
?>
	
<?php	
		if($num_rows1==1)
		{
			
					
			if($info['att_check_out']=="00:00:00")
			{
?>			<tr style='background-color:Thistle';>
			
<?php			$y=$info['att_check_out'];
			}
			else
			{
?>			<tr>
<?php			$y=$info['att_check_out'];
			}
			
				
		}
		else
		{
			while($infov = mysqli_fetch_array($sql))                                                     
			{
			
				$y=$infov['att_check_out'];
			}
		
			if($y=="00:00:00")
			{
?>			<tr style='background-color:Thistle';>
			
<?php
			}
			else
			{
?>			<tr>
			
<?php
			}		
			
		}
?>
		
		<td align="center" > <?php echo $f_usr; ?> </td>
		<td align="center" > <?php echo $info['att_date']; ?> </td>
<?php
		$p=$info['att_date'];
		$timestamp2= strtotime("$p");
		$day1 = date('l', $timestamp2);
?>
		<td align="center" > <?php echo $day1; ?> </td>
		<td align="center" > <?php echo $info['att_check_in']; ?> </td>
<?php
		if($y=="00:00:00")
		{
?>
		<td align="center" class="warning"> <?php echo $y; echo "&nbsp;&nbsp;&nbsp;Forgot to check out" ;?> </td>
<?php
		}
		else
		{
?>
		<td align="center" > <?php echo $y;?> </td>
<?php		}

		$sum=0;
		if($num_rows1!=1)
		{
			while($info1 = mysqli_fetch_array($sql1))
			{	
				$diff = $info1['att_diff'];				
				$y=seconds_from_time("$diff");
				$sum=$sum+$y;
			}
			$z=time_from_seconds($sum);

							
			
				if($z < "07:00:00")
				{
?>					<td align="center"class = "warning" > <?php echo $z ;?> </td>
<?php				}
				else
				{
?>
				<td align="center"><?php echo $z;?> </td>	
				
<?php				}
?>				</tr>
			

<?php
		}
		else
		{
			$infox = mysqli_fetch_array($sql1);
			$m=$infox['att_diff'];
			if($m < "07:00:00")
			{			
?>					
			<td align="center"class = "warning" > <?php echo $m ;?> </td>			
<?php			}
			else
			{
?>
				<td align="center"> <?php echo "$m"; ?> </td>
				
<?php
			}
?>
			</tr>	
<?php		}
	}
	else
	{
		echo '<script language="javascript"> alert("THE PERSON WAS ON LEAVE ON THIS DATE!! OR This day was deleclared as a HOLIDAY!! CHOOSE ANOTHER PERSON OR DATE");window.location = "reportTotal.php"</script>';
	}
}
elseif(($f_usr == "" && $f_usr2 == "" && $f_usr1!="")||($f_usr == "" && $f_usr1 == "" && $f_usr2!=""))
{

//echo "Particular Date Attendance report";
$k=2;

	if($f_usr2!="")
	{
		$tempdate=$f_usr2;
		$timestamp2= strtotime("$f_usr2");
		$day2 = date('l', $timestamp2);
		if(($day2=="Sunday")||($day2=="Saturday"))
		{
			echo'<script language="javascript"> alert("Its a HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
		}
		
	}
	elseif($f_usr1!="")
	{
		$tempdate=$f_usr1;
		$timestamp1= strtotime("$f_usr1");
		$day1 = date('l', $timestamp1);
		if(($day1=="Sunday")||($day1=="Saturday"))
		{
			echo'<script language="javascript"> alert(" Its a HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
		}
	}

$sql2 =mysqli_query($con,"SELECT DISTINCT uname FROM tb_attendance t1,tb_user t2 WHERE att_date ='$tempdate' AND t1.att_uid=t2.uid ");
$num_rows2 = mysqli_num_rows($sql2);
	if($num_rows2!=0)
	{
		while($info2 = mysqli_fetch_array($sql2))
		{
			$nm=$info2['uname'];
			$sql3=mysqli_query($con,"SELECT uname,att_date,att_check_in,att_check_out,att_diff,att_status FROM tb_attendance t1,tb_user t2 WHERE uname='$nm' AND t2.uid=t1.att_uid AND att_date ='$tempdate'");
		
			$sql4=mysqli_query($con,"SELECT att_diff FROM tb_attendance t1,tb_user t2 WHERE uname='$nm' AND t2.uid=t1.att_uid AND att_date ='$tempdate'");

	

			$num_rows3 = mysqli_num_rows($sql3);
			$num_rows4 = mysqli_num_rows($sql4);

			$info3 = mysqli_fetch_array($sql3); 
			   
			if($num_rows3!= 0)
			{ 
				if($num_rows3 == 1)
				{

					$y= $info3['att_check_out'];				
				}	
				else
				{
					while($infop = mysqli_fetch_array($sql3))                                                     
					{
			
						$y=$infop['att_check_out'];
					}
		
				}
				
				if($y=="00:00:00")
				{
?>
				<tr style='background-color:Thistle';>
<?php
				}
				else
				{
?>
				<tr>
<?php
				}
?>
				<td align="center" > <?php echo $nm; ?> </td>
				<td align="center"> <?php echo $info3['att_date'];?></td>
<?php
				$p=$info3['att_date'];
				$timestamp2= strtotime("$p");
				$day1 = date('l', $timestamp2);
?>
				<td align="center" > <?php echo $day1; ?> </td>
				<td align="center"> <?php echo $info3['att_check_in'];?></td>
<?php
				if($y=="00:00:00")
				{
?>
				<td align="center" class="warning"> <?php echo $y; echo "&nbsp;&nbsp;&nbsp;Forgot to check out" ;?> </td>
<?php
				}
				else
				{
?>
				<td align="center" > <?php echo $y;?> </td>
<?php				}

				$sum=0;
				if($num_rows4!=1)
				{
					while($info4 = mysqli_fetch_array($sql4))
					{	
						$diff = $info4['att_diff'];				
						$y=seconds_from_time("$diff");
						$sum=$sum+$y;
					}
					$z=time_from_seconds($sum);

					if($z < "07:00:00")
					{

?>						<td align="center" class = "warning" > <?php echo "$z"; ?> </td>
						</tr> 	
<?php					}
					else
					{
?>
						<td align="center"><?php echo "$z";?> </td>
						</tr>	
				
<?php					}

				}
				else
				{
					$infoq = mysqli_fetch_array($sql4);
					$m=$infoq['att_diff'];
					if($m < "07:00:00")
					{
?>
						<td align="center" class="warning"> <?php echo "$m"; ?> </td>
						</tr>	
<?php					}
					else
					{
?>
						<td align="center"> <?php echo "$m"; ?> </td>
						</tr>
<?php
					}

				}

			}

		}
	}
	else
	{
		echo '<script language="javascript"> alert("*** THIS DAY IS DECLARED AS A HOLIDAY!! CHOOSE ANOTHER DATE");window.location = "reportTotal.php"</script>';
	}	
}
elseif($f_usr ==!"" && $f_usr2 ==!"" && $f_usr1!="")
{

$k=2;

$timestamp1= strtotime("$f_usr1");
$timestamp2= strtotime("$f_usr2");
$day1 = date('l', $timestamp1);

$d=$timestamp1+ 86400;


if(($day1=="Saturday")&&($timestamp2==$d))
{
	
	echo'<script language="javascript"> alert(" Both are HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';	
}
elseif(($f_usr1==$f_usr2)&&(($day1=="Saturday")||($day1=="Sunday")))
{
	echo'<script language="javascript"> alert("Its a HOLIDAY!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
}
elseif($timestamp2<$timestamp1)
{
	echo'<script language="javascript"> alert("Enter the correct value for TO and FROM field");window.location = "reportTotal.php"</script>';
}
	$sql =mysqli_query($con,"SELECT DISTINCT att_date FROM tb_attendance t1, tb_user t2 WHERE t2.uname = '$f_usr' AND t1.att_date BETWEEN '$f_usr1' AND '$f_usr2' AND t1.att_uid = t2.uid");
	$num_rows= mysqli_num_rows($sql);	
	if($num_rows!=0)
	{	
		
		$var1=0;
		$varsum=0;
		while($info = mysqli_fetch_array($sql))
		{
			
			$var=$info['att_date'];
			$sql1 =mysqli_query($con,"SELECT uname, att_date, att_check_in,SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff))),att_status FROM tb_attendance t1,tb_user t2 WHERE t1.att_date = '$var' AND t2.uid = t1.att_uid AND uname = '$f_usr'");


			$sql2=mysqli_query($con,"SELECT att_check_out FROM tb_attendance t1,tb_user t2 WHERE t2.uname='$f_usr'AND t1.att_date='$var' AND t1.att_uid=t2.uid");
			$num_rows1= mysqli_num_rows($sql1);
			$info1= mysqli_fetch_array($sql1);
			$info2= mysqli_fetch_array($sql2);
			$num_rows2=mysqli_num_rows($sql2);
			if($num_rows2==1)
			{
				$y=$info2['att_check_out'];	
			}
			else
			{
				while($info2=mysqli_fetch_array($sql2))
				{
					$y=$info2['att_check_out'];
				}
			}
			if($num_rows1!=0)
			{
				$var1=$info1['SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff)))'];
				$varz=seconds_from_time("$var1");
				$varsum=$varsum+$varz;

				if($y=="00:00:00")
				{
?>
					<tr style='background-color:Thistle';>
<?php
				}
				else
				{
?>
					</tr>
<?php
				}
?>
				<td align="center" > <?php echo $f_usr; ?> </td>
				<td align="center" > <?php echo $info1['att_date']; ?> </td>
<?php
				$p=$info['att_date'];
				$timestamp2= strtotime("$p");
				$day1 = date('l', $timestamp2);
?>
				<td align="center" > <?php echo $day1; ?> </td>
				<td align="center" > <?php echo $info1['att_check_in']; ?> </td>
	
<?php				if($y=="00:00:00")
				{
?>
					<td align="center" class= "warning"> <?php echo $y; echo "&nbsp;&nbsp;&nbsp;Forgot to checkout" ?> </td>				
<?php
				}
				else
				{
?>
					<td align="center" > <?php echo $y; ?> </td>
<?php	
				}				

				$m=$info1['SEC_TO_TIME(SUM(TIME_TO_SEC(att_diff)))'];
				if($m < "07:00:00")
				{

?>
					<td align="center" class="warning"> <?php echo "$m"; ?> </td>
					</tr> 
<?php				}
				else
				{
?>
					<td align="center"> <?php echo "$m"; ?> </td>	
					</tr>
<?php
				}		
			}
			
		}
		$vary=time_from_seconds($varsum);

/*list($h, $m, $s) = explode(':', $time);
   					return ($h * 3600) + ($m * 60) + $s;*/

list($h, $m, $s) = explode(':', $vary);

?>
		<p>Total  working hour of &nbsp;&nbsp;<?php echo "$f_usr";?>&nbsp;&nbsp;from&nbsp;&nbsp; <?php echo "$f_usr1";?>&nbsp;&nbsp;to&nbsp;&nbsp; <?php echo "$f_usr2";?>&nbsp;&nbsp; is &nbsp;&nbsp; <?php echo "$h hours";?> &nbsp; <?php echo "$m minutes";?>&nbsp;<?php echo " $s seconds";?>&nbsp;&nbsp;</p>
<?php
	}
	else
	{
				
				echo'<script language="javascript"> alert(" The person was on leave!! CHOOSE SOME OTHER DATE");window.location = "reportTotal.php"</script>';
	}
	
}


if($k==1)
{
	
	while($info = mysqli_fetch_array($sql))
	{
?>
	<tr>
	
		<td align="center" > <?php echo $info['uname']; ?> </td>
		<td align="center" > <?php echo $info['att_date']; ?> </td>
<?php		$x=$info['att_date'];

		$timestamp2= strtotime("$x");
		$day1 = date('l', $timestamp2);

?>
		<td align="center" > <?php echo "$day1";?></td>
		<td align="center" > <?php echo $info['att_check_in']; ?> </td>
		<td align="center" > <?php echo $info['att_check_out']; ?> </td>
<?php
		if($m < "07:00:00")
		{
?>
			<td align="center" class="warning"> <?php echo $info['att_diff']; ?> </td>
			</tr>	
<?php	
		}
		else
		{

?>
			<td align="center"> <?php echo $info['att_diff']; ?> </td>
			</tr>
<?php
		}

?>
		
	</tr>
	
<?php
	}
}
?>


</table>
</div>
</div>	
</form>
</body>
</html>

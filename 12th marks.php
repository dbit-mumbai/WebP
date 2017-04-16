<?php

 $_connect= mysqli_connect("localhost","root","","student")or die("couldn't find server");
 if(isset($_POST['Submit']))
	{
		$sname = $_POST['sname'];

		$mname = $_POST['mname'];

		$lname = $_POST['lname'];

		$fname = $_POST['fname'];

		$Mname = $_POST['Mname'];

        	$bday = $_POST['bday'];

        	$gen = $_POST['gender'];

       		$stream = $_POST['stream'];

		$phy = $_POST['phy'];

		$chem = $_POST['ch'];

		$math = $_POST['math'];

		$eng = $_POST['eng'];

		$sub1 = $_POST['sub1'];

		$sub2 = $_POST['sub2'];
	}
?>
﻿<!doctype html>
<html>
<head>
<title>
	12th Marksheet
</title>
</head>
<body>

<table border=1 align="center" width=60% style="border-collapse:collapse; background-color:#F8F6CA;">
<tr>
	<td><img src="CBSE-logo.jpg" height="140" width="150"></img></td>
	<th align="center"><pre><h1>केंद्रीय माध्यमिक शिक्षा बोर्ड<br> <font color="blues" face="Comic sans MS" size="5">
Central Board of Secondary Education. </font> </h1></pre> </th>
</tr>	
<tr>
	<th colspan="2" align="center"><h4><pre> Delhi Divisional Board	   विभागीय मंडळ </pre></h4> </th>
</tr>
<tr>
	<th colspan="2" align="center"><h3><pre> 	उच्च माध्यमिक प्रमाणपत्र परीक्षा - निशान के वक्तव्य	</h3></pre></th>
</tr>
<tr>
	<th colspan="2" align="center"><h3><pre> Higher Secondary Certificate Examination - Statement of marks (Revised from-2008) </pre></h3></th>
</tr>
	<th colspan="2">
	<table border="1" align="center" width=100% style="border-collapse:collapse">
	<tr>
		
		<th>Stream</th>
		<th>Seat No.</th>
		<th>Centre No. </th>
		<th>School No. </th>
		<th>Month & year of exam</th>
		<th>SR No. of statement</th>
	</tr>	
	<tr>
		<?php
			echo "<th>$stream</th>";
		?>
		<th> NO44900 </th>
		<th> 0202 </th>
		<th> 05.01.004 </th>
		<th> FEB-2009 </th>
		<th> 020258 </th>
	</tr>
	<tr>
		<th colspan="6" align="center"> परीक्षार्थी का पूरा नाम (उपनाम पहले) - Candidate's full name (Surname first) </th>
	</tr>
	<tr>
		<th colspan="6" align="center"><?php echo "<h3>$lname $sname $mname</h3>" ?></th>
	</tr>
	<tr>
		<th colspan="6" align="center"><h4><pre>
परीक्षार्थी की मां का नाम/ Candidate's Mother's Name: <?php echo $Mname; ?></pre></h4></th>
	</tr>
		<tr>
		<th colspan="6" >
		<table border=1 align="center" width=100% style="border-collapse:collapse; ">
			<tr>
			<th cellpadding="3"> Subjects </th>
			<th colspan="2"> Compulsory <br> Languages</th>
			<th colspan="5"> Optional Subjects </th>
			<th > Extra CO Subject </th>
			<th  rowspan="3" colspan="3" align="center"> Total Marks </th>
			</tr>
			<tr>
			<th>Subject Code</th>
			<td>01</td>	<td>02</td>	<td>38</td>	<td>42</td>
			<td>45</td>	<td>49</td>	<td>--</td>	<td>--</td>
			</tr>
			<tr>
			<th>Medium</th>
			<td>ENG</td>	<td>ENG</td>	<td>ENG</td>	<td>ENG</td>
			<td>ENG</td>	<td>ENG</td>	<td>--</td>	<td>--</td>
			</tr>

			<tr>
			<th>Maximum Marks</th>
			<td>100</td>	<td>100</td>	<td>100</td>	<td>100</td>	<td>100</td>
			<td>100</td>	<td>100</td>	<td>200</td>	<td>600/700</td>
			</tr>

			<tr>
			<th>Marks Obtained</th>
			<td><?php echo $eng; ?></td>
			<td><?php echo $math; ?></td>
			<td><?php echo $chem; ?></td>
			<td><?php echo $phy; ?></td>
			<td><?php echo $sub1; ?></td>
			<td><?php echo $sub2; ?></td>
			<td>--</td>
			<td>--</td>
			<td>
			<?php
				$total=$eng+$math+$chem+$phy+$sub1+$sub2;
				$number=$total;
				echo $total; 
			?>
			</td>
			</tr>

			<tr>
			<th colspan="6">Physical Education-Grade</th>
			<th colspan="2">A</th>
			<th rowspan="5" colspan="2"><img src="28-cbse.jpg"></img></th>
			</tr>

			<tr>
			<th>Total Marks(In words)</th>
			<th colspan="7"> 
			<?php
				echo "*IDK HOW TO CONVERT NUMBER INTO WORDS*";
			?>
			</th>
			</tr>
			
			<tr>
			<th> Percentage Of Marks</th>
			<th colspan="2">
			<?php
				$percentage=($total/500)*100;
				echo $percentage."%"; 
			?>
			</th>
			<th colspan="2">Result</th>
			<th colspan="3">
			<?php
				if($percentage>35)
				{
					echo "PASS";
				}
				else
				{
					echo "FAIL";
				}
			?>
			</th>
			</tr>
			
			<tr>
			<td colspan="4"><h5>Please see the subject code description overleaf</td>
			<td colspan="4"><h5>Please see description of medium overleaf</td>
			</tr>
		
			<tr>
			<td colspan="8"><h5>No change in this statement of marks shall be made except by the authority issuing
					it. Any infringement of this requirement will result in cancellation of the statement of
					marks in question and may also involve imposition of other appropriate penalty as
					decided by the Board.</td>
			</tr>


			<tr>
			<td colspan="8"><h5>Minimum 35% marks are essential to pass in each subject. XX- Indicates exemption
						in the subject. AA- Indicates Absent <br>
					+Sign, if shown under the total marks, indicates the grace marks awarded for getting
					grade I as per regulation of the board.<br>
					Before total marks and after + sign indicate the additional marks given for the sports 
					candidate <br>
					@before total marks and marks after + sign indicate the additional marks given for the
					sports candidate and grace marks awarded for getting grade I.
			</td>
			<th colspan="2"> Signature <br> <br> <br> Divisional Secretary <br> MSBSHSE </th>
			</tr>
			</table>
			</tr>

			<tr>
			<th colspan="6">
			<table border="1" width=100% style="border-collapse: collapse">
			<tr>
			<th colspan="4"><pre><h3>I0591673 			Grades of Certificate			40092184661</h3></pre></th>
			</tr>	

			<tr>
			<th> Grade I with Distinction </th>
			<th> Grade I </th>
			<th> Grade II </th>
			<th> Grade Pass </th>
			</tr>
		
			<tr>
			<th> 75% and above </th>
			<th> 60% and above but below 75% </th>
			<th> 45% and above but below 60% </th>
			<th> All other successfull candidates <br> (Including the exempted) </th>
			</tr>
			</table>
		
		</body>
		</html>


























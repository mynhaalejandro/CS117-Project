<?php



	//call the FPDF library
	require('fpdf17/fpdf.php');

    require("my_connection.php");
    error_reporting(0);
    
    //add error_reporting(0); to remove errors 
    $query = "SELECT * FROM students  
            LEFT JOIN process ON process_fk = process_id
            LEFT JOIN parents ON parent_fk = parent_id
            LEFT JOIN tracks ON track_fk = track_id
            LEFT JOIN strands ON strand_fk = strand_id
            WHERE lrn= '".$_POST['lrn']."'";
    $result = mysqli_query($dbase,$query) or die("Error2: ".mysqli_error($dbase));




        if (mysqli_num_rows($result) > 0) {
   
        while($row = mysqli_fetch_assoc($result)) {


//create pdf object
$pdf = new FPDF('P','mm','Legal');
//add new page
$pdf->AddPage();
$pdf->SetTitle('YourRegistrationForm');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(65 ,5,'',0,0);
$pdf->Cell(90 ,10,'SINAIT NATIONAL HIGH SCHOOL',0,1);//end of line

$pdf->SetFont('Arial','I',9);

$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(90 ,0,'Sinait, Ilocos Sur',0,1);//end of line


$pdf->SetFont('Arial','B',9);

$pdf->Cell(130 ,5,"STUDENT'S FILE",0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->SetFont('Arial','',10);

$pdf->Cell(155 ,5,'Registration Form',0,0);

$pdf->SetFont('Arial','',9);

$pdf->Cell(34 ,5,'No.'.$row["no"],0,1);//end of line

$pdf->SetFont('Arial','',9);


$pdf->Cell(11 ,5,'NAME: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(80 ,5,$row["fname"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'AGE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(5 ,5,$row["age"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10 ,5,'DATE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["date"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(18 ,5,'ADDRESS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(73 ,5,$row["address"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'LRN: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(23 ,5,$row["lrn"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'SEX: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["sex"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(18 ,5,'BIRTHDAY:',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["bday"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(22 ,5,'BIRTHPLACE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(90 ,5,$row["bplace"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(35 ,5,"PARENTS/GUARDIAN: ",0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(87 ,5,$row["parents_guardian"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(36 ,5,'CELLPHONE NUMBER: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(50 ,5,$row["cp_number"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(23 ,5,'OCCUPATION: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(68 ,5,$row["occupation"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(47 ,5,'ENROLLMENT CREDENTIALS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(17 ,5,$row["e_credentials"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(23 ,5,'GRADE LEVEL: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["grade_level"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(19 ,5,'SEMESTER: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["sem"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25 ,5,'SCHOOL YEAR: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(17 ,5,$row["sch_year"],0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,'SCHOOL LAST ATTENDED: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["sch_last_attended"],0,1);
$pdf->SetFont('Arial','',9);

$pdf->Cell(32 ,5,'SCHOOL ADDRESS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(90 ,5,$row["sch_address"],0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(26 ,5,'STUDENT TYPE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["stud_type"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(36 ,5,'TRANSFERRED FROM: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["transferred_from"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(12 ,5,'TRACK: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(61 ,5,$row["tname"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(15 ,5,'STRAND: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["sname"],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,1,'',0,1);//end of line

$pdf->SetFont('Arial','',9);

$pdf->Cell(110 ,5,"LEARNER'S SIGNATURE: ____________________",0,0);
$pdf->Cell(30 ,5,'APPROVED BY:',0,0);

$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,"ANTONIO S. FARINAS",0,1);


$pdf->SetFont('Arial','I',8);
$pdf->Cell(145 ,5,'',0,0);
$pdf->Cell(90 ,5,"School Principal IV",0,1);


$pdf->SetFont('Arial','',9);

$pdf->Cell(110 ,2,"Procedure",0,1);
$pdf->Cell(5 ,5,'',0,0);
$pdf->Cell(90 ,5,'1.Download and print this registration form. Click the download icon above to download.',0,1);
$pdf->Cell(5 ,5,'',0,0);
$pdf->Cell(90 ,2,"2.Go to your school's registrar, please make sure to take the following required documents with you: ",0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'*Report Card',0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'*Registration Form',0,1);

$pdf->Cell(5 ,2,'',0,0);
$pdf->Cell(90 ,2,'3.To be officially enrolled, secure your certificate of registration.',0,1);



/*------------------------------------------------------------*/
$pdf->SetFont('Arial','',11);
$pdf->Cell(90 ,0,'_______________________________________________________________________________________',0,1);//end of line

$pdf->SetFont('Arial','B',10);

$pdf->Cell(65 ,5,'',0,0);
$pdf->Cell(90 ,10,'SINAIT NATIONAL HIGH SCHOOL',0,1);//end of line

$pdf->SetFont('Arial','I',9);

$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(90 ,0,'Sinait, Ilocos Sur',0,1);//end of line


$pdf->SetFont('Arial','B',9);

$pdf->Cell(130 ,5,"TEACHER'S COPY",0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->SetFont('Arial','',10);

$pdf->Cell(155 ,5,'Registration Form',0,0);

$pdf->SetFont('Arial','',9);

$pdf->Cell(34 ,5,'No.'.$row["no"],0,1);//end of line

$pdf->SetFont('Arial','',9);


$pdf->Cell(11 ,5,'NAME: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(80 ,5,$row["fname"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'AGE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(5 ,5,$row["age"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10 ,5,'DATE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["date"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(18 ,5,'ADDRESS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(73 ,5,$row["address"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'LRN: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(23 ,5,$row["lrn"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'SEX: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["sex"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(18 ,5,'BIRTHDAY:',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["bday"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(22 ,5,'BIRTHPLACE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(90 ,5,$row["bplace"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(35 ,5,"PARENTS/GUARDIAN: ",0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(87 ,5,$row["parents_guardian"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(36 ,5,'CELLPHONE NUMBER: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(50 ,5,$row["cp_number"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(23 ,5,'OCCUPATION: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(68 ,5,$row["occupation"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(47 ,5,'ENROLLMENT CREDENTIALS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(17 ,5,$row["e_credentials"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(23 ,5,'GRADE LEVEL: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["grade_level"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(19 ,5,'SEMESTER: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["sem"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25 ,5,'SCHOOL YEAR: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(17 ,5,$row["sch_year"],0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,'SCHOOL LAST ATTENDED: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["sch_last_attended"],0,1);
$pdf->SetFont('Arial','',9);

$pdf->Cell(32 ,5,'SCHOOL ADDRESS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(90 ,5,$row["sch_address"],0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(26 ,5,'STUDENT TYPE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["stud_type"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(36 ,5,'TRANSFERRED FROM: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["transferred_from"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(12 ,5,'TRACK: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(61 ,5,$row["tname"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(15 ,5,'STRAND: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["sname"],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,1,'',0,1);//end of line

$pdf->SetFont('Arial','',9);

$pdf->Cell(110 ,5,"LEARNER'S SIGNATURE: ____________________",0,0);
$pdf->Cell(30 ,5,'APPROVED BY:',0,0);

$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,"ANTONIO S. FARINAS",0,1);


$pdf->SetFont('Arial','I',8);

$pdf->Cell(145 ,5,'',0,0);
$pdf->Cell(90 ,5,"School Principal IV",0,1);


$pdf->SetFont('Arial','',9);

$pdf->Cell(110 ,2,"Procedure",0,1);
$pdf->Cell(5 ,5,'',0,0);
$pdf->Cell(90 ,5,'1.Download and print this registration form. Click the download icon above to download.',0,1);
$pdf->Cell(5 ,5,'',0,0);
$pdf->Cell(90 ,2,"2.Go to your school's registrar, please make sure to take the following required documents with you: ",0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'*Report Card',0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'*Registration Form',0,1);

$pdf->Cell(5 ,2,'',0,0);
$pdf->Cell(90 ,2,'3.To be officially enrolled, secure your certificate of registration.',0,1);


/*------------------------------------------------------------*/
$pdf->SetFont('Arial','',11);
$pdf->Cell(90 ,0,'_______________________________________________________________________________________',0,1);//end of line

$pdf->SetFont('Arial','B',10);

$pdf->Cell(65 ,5,'',0,0);
$pdf->Cell(90 ,10,'SINAIT NATIONAL HIGH SCHOOL',0,1);//end of line

$pdf->SetFont('Arial','I',9);

$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(90 ,0,'Sinait, Ilocos Sur',0,1);//end of line


$pdf->SetFont('Arial','B',9);

$pdf->Cell(130 ,5,"OFFICE FILE",0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->SetFont('Arial','',10);

$pdf->Cell(155 ,5,'Registration Form',0,0);

$pdf->SetFont('Arial','',9);

$pdf->Cell(34 ,5,'No.'.$row["no"],0,1);//end of line

$pdf->SetFont('Arial','',9);


$pdf->Cell(11 ,5,'NAME: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(80 ,5,$row["fname"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'AGE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(5 ,5,$row["age"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10 ,5,'DATE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["date"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(18 ,5,'ADDRESS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(73 ,5,$row["address"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'LRN: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(23 ,5,$row["lrn"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8 ,5,'SEX: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["sex"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(18 ,5,'BIRTHDAY:',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["bday"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(22 ,5,'BIRTHPLACE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(90 ,5,$row["bplace"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(35 ,5,"PARENTS/GUARDIAN: ",0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(87 ,5,$row["parents_guardian"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(36 ,5,'CELLPHONE NUMBER: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(50 ,5,$row["cp_number"],0,1);
// new line
$pdf->SetFont('Arial','',9);
$pdf->Cell(23 ,5,'OCCUPATION: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(68 ,5,$row["occupation"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(47 ,5,'ENROLLMENT CREDENTIALS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(17 ,5,$row["e_credentials"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(23 ,5,'GRADE LEVEL: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["grade_level"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(19 ,5,'SEMESTER: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,$row["sem"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(25 ,5,'SCHOOL YEAR: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(17 ,5,$row["sch_year"],0,1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,'SCHOOL LAST ATTENDED: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(35 ,5,$row["sch_last_attended"],0,1);
$pdf->SetFont('Arial','',9);

$pdf->Cell(32 ,5,'SCHOOL ADDRESS: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(90 ,5,$row["sch_address"],0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(26 ,5,'STUDENT TYPE: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["stud_type"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(36 ,5,'TRANSFERRED FROM: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["transferred_from"],0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(12 ,5,'TRACK: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(61 ,5,$row["tname"],0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(15 ,5,'STRAND: ',0,0);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(30 ,5,$row["sname"],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,1,'',0,1);//end of line

$pdf->SetFont('Arial','',9);

$pdf->Cell(110 ,5,"LEARNER'S SIGNATURE: ____________________",0,0);
$pdf->Cell(30 ,5,'APPROVED BY:',0,0);

$pdf->SetFont('Arial','U',9);
$pdf->Cell(34 ,5,"ANTONIO S. FARINAS",0,1);


$pdf->SetFont('Arial','I',8);

$pdf->Cell(145 ,5,'',0,0);
$pdf->Cell(90 ,5,"School Principal IV",0,1);


$pdf->SetFont('Arial','',9);

$pdf->Cell(110 ,2,"Procedure",0,1);
$pdf->Cell(5 ,5,'',0,0);
$pdf->Cell(90 ,5,'1.Download and print this registration form. Click the download icon above to download.',0,1);
$pdf->Cell(5 ,5,'',0,0);
$pdf->Cell(90 ,2,"2.Go to your school's registrar, please make sure to take the following required documents with you: ",0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'*Report Card',0,1);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'*Registration Form',0,1);

$pdf->Cell(5 ,2,'',0,0);
$pdf->Cell(90 ,2,'3.To be officially enrolled, secure your certificate of registration.',0,1);


header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");   // any date in the past



//output the result
$pdf->Output('YourRegistrationForm.pdf','I'); 



        }
        } else {
            echo "<h3><center>No user data found!<center></h3>";
        }


?>
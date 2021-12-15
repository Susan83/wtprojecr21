<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<div class="logo">
            <a href="#" title="Logo">
                <img src="CHILD.png" alt="CHILD CARE" class="img-responsive">
            </a>
        </div>
	<center>
	<h1>Welcome To CLOUD CARE! <?=$_SESSION['user']['username']?> </h1>
	<a href="../controller/logout.php">logout</a> <br>
	<a href="viewProfile.php">view Profile</a>
	</center>
	<div class="container">
        <table>
            <tr>
                <td>About us</td>
            </tr>
            <tr>
                <td>
                    <p> Today, many families with young children must make a choice between spending significant portion of their income
on child care,finding a cheaper, but potentially lower- qualitycare option, orleavingthe workforce altogetherto become a
full-time caregiver. Whether due to high cost, limited availability, or inconvenient program hours, childcare
challenges redriving parents out of the work. Infect, in2016 alone, an estimated 2 million parents made career sacrifices due
to problems with child care.
Child care challenges have become a barrier to work, especially for mothers, who disproportionately take on unpaid
caregiving responsibilities when their family cannot find or afford childcare. In Bangladesh, most parents have limited
knowledge on child care and rearing.

                         </p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Contuc us: </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p>Address: CLOUD CARE Bashundhara Dhaka, BD 10013 Bangladesh. <br> The CLOUD CARE  Center 153 East 53rd Street 16/ F, Zone 19 Dhaka,<br> BD 10022 Bangladesh. <br>
                    </p>
                </td>
            </tr>
            <tr>
                <th> ORGANITION INFO :</th>
            </tr>
            <tr>
                <td> This project is for the children. In this modern time, our working parents are suffering from this problem that their child/kid
are unsafe with alone home and with their maids.
Ourapplicationcanuseeveryparentwhowanttotakecareoftheirchildvirtually and this application is the most comprehensive
all-in-one integrated solution. This project can help many people and change the lives. And our future generation will
safe with the concern.</td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li><a href="./controller/show.php">ORGANITION  ADVISORY</a></li>
                        <li><a href="./controller/show.php">PARENTS </a> </li>
                        <li><a href="./controller/show.php"> SERVICES</a></li>
                        <li><a href="./controller/show.php">MODARETOR</a></li>
                        <li><a href="./controller/show.php">STUDENTS</a></li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>Copyright c 2021 CLOD CARE Inc.</td>
            </tr>
        </table>
</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>
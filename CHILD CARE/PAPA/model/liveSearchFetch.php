<?php
$connect = mysqli_connect("localhost", "root", "", "childcare");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM users
	WHERE USERNAME LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY USERNAME";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>EMAIL</th>
							<th>User Type</th>
							<th>RESULT</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["user_id"].'</td>
				<td>'.$row["fname"].'</td>
				<td>'.$row["lname"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["type"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>

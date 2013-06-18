<?php include "connect.php"; 

	if(isset($_POST['approve'])) {
		$id = trim(mysql_real_escape_string($_POST['id']));
		mysql_query("UPDATE feedback SET active = '1' WHERE id='$id' limit 1");
	}

	if(isset($_POST['delete'])) {
		$id = trim(mysql_real_escape_string($_POST['id']));
		mysql_query("DELETE FROM feedback WHERE id='$id' limit 1");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Easy Web Feedback Admin</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/easy-feedback.css" />
</head>

<body>
	<div class="easy_approve">
		<table width="700">
			<?php
				$select_feedback = mysql_query("SELECT * FROM feedback WHERE active='0'")or die(mysql_error());// get all feedback thats not been aproved
				while($row=mysql_fetch_array($select_feedback, MYSQL_ASSOC))
				{
					$id = $row['id'];
					$name = $row['name'];
					$email = $row['email'];
					$rating = $row['rating'] .'star.jpg';
					$comment = $row['comment'];
					
					echo "<tr><td>$name</td><td>$email</td><td><img src='/images/$rating' alt='rating' width='100'/></td><td>$comment</td><td><form method='post'><input type='hidden' name='id' value='$id'><input type='submit' name='approve' value='Update' /><input type='submit' name='delete' value='Delete' /></form></td></tr>";
				}
			?>
	    </table>
	</div>
</body>

</html>
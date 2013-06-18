<?php include "connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Easy Web Feedback Testimonials</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/easy-feedback.css" />
</head>

<body>
	<div class="easy_testimonials">
		<table width="500">
			<?php
				$select_feedback = mysql_query("SELECT * FROM feedback WHERE active='1'")or die(mysql_error());// get all feedback for a testimonials page
				while($row=mysql_fetch_array($select_feedback, MYSQL_ASSOC))
				{
					$name = $row['name'];
					$email = $row['email'];
					$rating = $row['rating'] .'star.jpg';
					$comment = $row['comment'];
					echo "<tr><td>$name</td><td>$email</td><td><img src='/images/$rating' alt='rating' width='100'/></td><td>$comment</td></tr>";
				}
			?>
	    </table>
	</div>
</body>

</html>
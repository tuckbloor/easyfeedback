<!DOCTYPE html>
<html>
<head>
	<title>Easy Web Feedback</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/easy-feedback.css" />
</head>

<body>
	<div class="easy_feedback">
		<form method="post" autocomplete="off">
			<p>
				<label for="name">Name:</label>
				<input name="name" id="name" type="text" placeholder="Name" />
			</p>
			<p>
				<label for="email">Email:</label>
				<input name="email" type="email" id="email" placeholder="Email Address" />
			</p>

			<p>
				<label for="rating">Rating:</label>
				<select name="rating" id="rating">
					<option value="1">Poor</option>
					<option value="2">Average</option>
					<option value="3">Good</option>
					<option value="4">Very Good</option>
					<option value="5">Excellant</option>
				</select>
			</p>
			<p>
				<label for="comment">Comment</label>
				<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
			</p>
			<p>
				<label for="submit"></label>
				<input name="feedback" type="submit" id="feedback" class="fb_button" value="Leave Feedback" />
			</p>
			<div class="clear"></div>
		</form>
	</div>
</body>

</html>
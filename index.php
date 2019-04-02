<?php
    require 'addpostDAO.php';
    if(isset($_POST['add'])){
        $comp_name = $_POST['name'];
        $comp_add = $_POST['address'];
        $comp_occu = $_POST['occupation'];
        $comp_year = $_POST['year'];
        $comp_time = $_POST['hour'];
        $comp_salary = $_POST['salary'];
        $comp_atm = $_POST['atmosphere'];
        $comp_comp = $_POST['compliance'];
        $comp_comment = $_POST['comment'];
        //$user_type = 1;
        $result = addPost($comp_name, $comp_add, $comp_occu, $comp_year, $comp_time, $comp_salary, $comp_atm, $comp_comp, $comp_comment);
        if($result)
        {
            header('Location: retrievepost.php');
        }
    }
    /*adduser*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Post Page</title>
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>
	<div class="menu" id="home">
			<ul>
				<li> <a href="index.html">home</a></li>
				<li>news</li>
				<li> <a href="form.html">register</a></li>
				<li><a href="login.html">log in</a></li>
				<li>log out</li>
			</ul>
	</div>
	
	<h1>Tell me about your company !</h1>
	<div class="form">
		<form>
			<div class=post>
				<div class="post1">
					<span class="company">What is the name of company ?</span><br><input type="text" name="company"><br>
				</div>

				<div class="post2">
					<span class="company" name="address">What is the address of company ?</span><br>
                    <input type="text" name="address"><br>
				</div>

				<div class="post3">
					<span class="occupation">What is your occupation ?</span>
					<select name="occupation">
						<option value="Regular Employee" name="occupation">Regular employee</option>
						<option value="Part-Time employee" name="occupation">Part-Time employee</option>
						<option value="Non-regular employee" name="occupation">Non-regular employee</option><br>
					</select>
				</div>

				<div class="post4">
                    <span class="howlong" name="year">How long do you work ?</span><input type="number" name="year">
                    <span class="years" name="year">Years</span><br>
				</div>

				<div class="rate">
					<div class="hour" name="hour">
						<span class="hour">Working Time:</span>
						<input type="radio" name="hour[]" value="1" >
						<input type="radio" name="hour[]" value="2" >
						<input type="radio" name="hour[]" value="3" >
						<input type="radio" name="hour[]" value="4" >
						<input type="radio" name="hour[]" value="5" >
					</div>

					<div class="salary" name="salary">
						<span class="hour">Salary:</span>
						<input type="radio" name="salary[]" value="1" >
						<input type="radio" name="salary[]" value="2" >
						<input type="radio" name="salary[]" value="3" >
						<input type="radio" name="salary[]" value="4" >
						<input type="radio" name="salary[]" value="5" >
					</div>

					<div class="atmosphere" name="atmosphere">
						<span class="hour">Atmosphere:</span>
						<input type="radio" name="atmosphere[]" value="1" >
						<input type="radio" name="atmosphere[]" value="2" >
						<input type="radio" name="atmosphere[]" value="3" >
						<input type="radio" name="atmosphere[]" value="4" >
						<input type="radio" name="atmosphere[]" value="5" >
					</div>

					<div class="compliance" name="compliance">
						<span class="hour">Compliance:</span>
						<input type="radio" name="compliance[]" value="1" >
						<input type="radio" name="compliance[]" value="2" >
						<input type="radio" name="compliance[]" value="3" >
						<input type="radio" name="compliance[]" value="4" >
						<input type="radio" name="compliance[]" value="5" >
					</div>
				</div>

					<div class="comment" name="comment">
					<textarea rows="8" cols="60" placeholder="Leave a comment." name="comment"></textarea><br>
					</div>
					 	<a href="confirm.php"><input type="submit" name="Send" value="Confirm"></a>
					 	<input type="reset" name="reset" value="Reset">
				</div>
		</form>
	</div>
</html>
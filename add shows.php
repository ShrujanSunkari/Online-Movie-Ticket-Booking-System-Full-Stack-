<?php include('header 1.php');?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css"/>
<!DOCTYPE html>
<html>
<body>
<a href="add theatres.php"><button type="button" class="button">ADD THEATRES !
</button></a>
<a href="add movies.php"><button type="button" class="button">ADD MOVIES !
</button></a>
<a href="add shows.php"><button type="button" class="button">ADD SHOWS !
</button></a>
</body>
<style>
.button {
  background-color: red; 
  border:2 px; 
  border-radius : 10px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-right: 30px;}
</style>
</html>
<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">ADD SHOWS !</div>
</div>
                  <!DOCTYPE html>
<html>
<body>
<form action="php shows conn.php" method="POST">
<label for ="show id">Enter Show Id : </label>
<br></br>
<input type="number" id="show id" name="s_id" />
<br></br>
<label for ="show tym id">Enter Show Time Id : </label>
<br></br>
<input type="number" id="show Time id" name="st_id" />
<br></br>
<label for ="theatre id">Enter Theatre Id : </label>
<br></br>
<input type="number" id="theatre id" name="theatre_id" />
<br></br>
<label for ="movie id">Enter Movie Id : </label>
<br></br>
<input type="number" id="movie id" name="movie_id" />
<br></br>
<label for ="date">Enter Show Start date : </label>
<br></br>
<input type="date" id="date" name="start_date" />
<br></br>
<label for ="stat">Enter Status : </label>
<br></br>
<input type="number" id="stat" name="status" />
<br></br>
<label for ="stat1">Enter rstatus : </label>
<br></br>
<input type="number" id="stat1" name="r_status" />
<br></br>
<input type="submit" value="Submit">
<br></br>
<br></br>
</form> 
</body>
</html>
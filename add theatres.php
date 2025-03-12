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
				  <div class="panel-heading">ADD THEATRES !</div>
</div>
                  <!DOCTYPE html>
<html>
<body>
<form action="php theatres conn.php" method="POST">
<label for ="id">Enter Theatre Id : </label>
<br></br>
<input type="number" id="id" name="t_id" />
<br></br>
<label for ="t name">Enter Theatre name : </label>
<br></br>
<input type="text" id="t name" name="theatre_name" />
<br></br>
<label for ="addr">Enter Address : </label>
<br></br>
<input type="text" id="addr" name="address" />
<br></br>
<label for ="pla">Enter Place : </label>
<br></br>
<input type="text" id="pla" name="place" />
<br></br>
<label for ="stat">Enter State : </label>
<br></br>
<input type="text" id="stat" name="state" />
<br></br>
<label for ="pi">Enter Pin: </label>
<br></br>
<input type="number" id="pi" name="pin" />
<br></br>
<input type="submit" value="Submit">
<br></br>
<br></br>
</form> 
</body>
</html>
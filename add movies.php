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
				  <div class="panel-heading">ADD MOVIES !</div>
</div>
                  <!DOCTYPE html>
<html>
<body>
<form action="php movies conn.php" method="POST">
<label for ="movie id">Enter Movie Id : </label>
<br></br>
<input type="number" id="movie id" name="movie_id" />
<br></br>
<label for ="t id">Enter Theatre Id : </label>
<br></br>
<input type="number" id="t id" name="t_id" />
<br></br>
<label for ="movie name">Enter Movie name : </label>
<br></br>
<input type="text" id="movie name" name="movie_name" />
<br></br>
<label for ="ca st">Enter Cast : </label>
<br></br>
<input type="text" id="ca st" name="cast" />
<br></br>
<label for ="d esc">Enter Description : </label>
<br></br>
<input type="text" id="d esc" name="desc" />
<br></br>
<label for ="rel_date">Enter Release Date : </label>
<br></br>
<input type="text" id="rel_date" name="release_date" />
<br></br>
<label for ="img">Enter Image Path : </label>
<br></br>
<input type="text" id="img" name="image" />
<br></br>
<label for ="vid_url">Enter Video Url : </label>
<br></br>
<input type="text" id="vid_url" name="video_url" />
<br></br>
<label for ="sta_tus">Enter Status : </label>
<br></br>
<input type="number" id="sta_tus" name="status" />
<br></br>
<input type="submit" value="Submit">
<br></br>
<br></br>
</form> 
</body>
</html>
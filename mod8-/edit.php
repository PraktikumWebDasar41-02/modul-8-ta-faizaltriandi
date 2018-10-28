<?php
session_start();
require_once("koneksi.php");

$nim=$_SESSION['nim']; 
$data =mysqli_query($koneksi, "SELECT * from data where nim='$nim'");
$row=mysqli_fetch_array($data);
$genre=explode(",",$row["genre"]);
$tempatwisata[]=explode(",",$row["tempatwisata"]);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Buat Akun</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Faizal</a>
          <div class="container" style="width: 100px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil </a>
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="edit.php">Edit</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="register.php">Logout.</a>
        </li>
        </ul>
        </div>
      </nav>
    </div>

    <div class="container" style="margin: 50px;">
    	<h1>Editor.</h1>
    	<div class="row">
    		<div class="col-md-5">
    			   <form method="POST" action="dashboard.php">
  						<div class="form-group">
    					<label for="exampleInputEmail1">Nama Depan</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="put your first name" name="namadepan" value="<?php echo $row['namadepan']; ?>" name="namadepan">
    					</div>
    					<div class="form-group">
    					<label for="exampleInputEmail1">Nama Belakang</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="put your last name" name="namabelakang" value="<?php echo $row['namabelakang']; ?>" name="namabelakang">
  						</div>
  						<div class="form-group">
    					<label for="exampleInputEmail1">NIM</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="put your NIM" name="nim" value="<?php echo $row['nim']; ?>" name="nim">
  						</div>
  						<div class="form-group">
    					<label for="exampleInputEmail1">Kelas</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="put your class" name="kelas" value="<?php echo $row['kelas']; ?>" name="kelas">
  						</div>
  						<div class="form-group">
    					<label for="exampleInputEmail1">Hobi</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="put your hobby" name="hobi" value="<?php echo $row['hobi']; ?>" name="hobi">
  						</div>
  						<div class="form-group">
    					<label for="exampleInputEmail1">Tanggal Lahir</label>
    					<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="put your birtday" name="tanggallahir" value="<?php echo $row['tanggallahir']; ?>" name="tanggallahir">
  						</div>
  						<tr>
  						<td>Tempat Wisata</td><br>
  						<td>
                			<input type="checkbox" name="tempatwisata[]" value="Bandung"<?php if(in_array('Bandung',$wisata)):echo'checked';endif?> >Bandung<br>
                			<input type="checkbox" name="tempatwisata[]" value="Raja Ampat"<?php if(in_array('Raja Ampat',$wisata)):echo'checked';endif?> >Raja Ampat
                			<br>
                			<input type="checkbox" name="tempatwisata[]" value="Tidore"<?php if(in_array('Tidore',$wisata)):echo'checked';endif?> >Tidore<br>
                			<input type="checkbox" name="tempatwisata[]" value="Sabang" <?php if(in_array('Sabang',$wisata)):echo'checked';endif?> >Sabang</td><br>
        				</tr>
        				<tr>
        					<td>Genre Film</td><br>
        					<td>
                			<input type="checkbox" name="genre[]" value="Action" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Action<br>
                			<input type="checkbox" name="genre[]" value="Romance" <?php if(in_array('Romance',$genre)):echo'checked'; endif ?> >Romance<br>
                			<input type="checkbox" name="genre[]" value="Fiksi" <?php if(in_array('Action',$genre)):echo'checked'; endif ?> >Fiksi<br>
                			<input type="checkbox" name="genre[]" value="Comedy" <?php if(in_array('Drama',$genre)):echo'checked'; endif ?> >Comedy
            				</td>
        				</tr>

  						<div class="form-group form-check">
    					<input type="checkbox" class="form-check-input" id="exampleCheck1">
    					<label class="form-check-label" for="exampleCheck1">Check me out</label>
  						</div>
  						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>
    		</div>
    	</div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
require_once("koneksi.php");

$namadepan=$_POST['namadepan'];
$namabelakang= $_POST['namabelakang'];
$nim= $_POST['nim'];
$kelas= $_POST['kelas'];
$hobi= $_POST['hobi'];
$genre= $_POST['genre'];
$tempatwisata= $_POST['tempatwisata'];


$sql= " UPDATE data SET namadepan='$namadepan', namabelakang='$namabelakang' ,nim='$nim',kelas='$kelas', hobi='$hobi', genre='$genre', tempatwisata='$tempatwisata',tanggallahir='$tanggallahir' where nim='$nim'";
if(mysqli_query($koneksi, $sql)){
	header("Location:dashboard.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($koneksi);
}
?>
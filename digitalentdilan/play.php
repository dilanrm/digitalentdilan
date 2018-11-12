<?php 
extract($_GET); 
include 'header.php'; 
?>
	<title>Play</title>
<?php 
include 'navi.php'; 
$sql = 'Select * from `web`.`games` where id = '.$id.'';
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res); 
?>
    <h1 class="text-center">Play</h1>
	<h2><?php echo $row['nama']; ?></h2>
	<center> <iframe src="<?php echo $row['file'];?>" name="iframe" width="570px" height="450px" frameborder="0" allowfullscreen>
	</iframe></center>
	<br>
	<h4>*Note: Exit and fullscreen button may not works on play mode. So, don't force your mouse, touchpad, or whatever is it to overly click it. Just move to another page.</h4>
	<h4>**Note: some game maybe only in Bahasa, and I don't have time or motivation to make English version of it.</h4>
<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>
	<title>Games</title>
<?php 
include 'navi.php'; 
$sql = 'Select * from u194943051_dbhos.games';
$res = mysqli_query($conn, $sql);
echo '<h1 class="text-center">Game List</h1>';
while($row=mysqli_fetch_assoc($res)){ ?>
    <h2><?php echo $row['nama']; ?></h2><img class="img-thumbnail" src="assets/img/<?php echo $row['pic']; ?>" width="100" height="100">
    <div class="btn-group" role="group">
        <a href="play.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary" type="button">Play </button></a>
       <a href="<?php echo $row['download']; ?>"> <button class="btn btn-success" type="button">Download </button></a>
    </div>
<?php } include 'footer.php'; ?>

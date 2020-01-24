<?php
require('includes/functions.php');
$id=isset($_GET['id'])?$_GET['id']:0; 
$datas = FindOneById($id);


?>

<!doctype html>
<html lang="fr">
<?php require('includes/head.php') ?>
<body id="detail">
    <?php require('includes/header.php') ?>

    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $datas ['title']?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <?php $src='images/large/'.$datas['slug'];?>
                <img src="<?php echo $src?>" alt="Image large file"/>
                <!-- Picture date and location -->
                <figcaption><?php echo $datas ['date'].' '.$datas['location']?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $datas ['description']?></p>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                </a>
                <a href="gallery.php" class="btn">
                    Next shot
                </a>
            </p>
        </div>
    </main>
    <?php require('includes/footer.php') ?>
</body>
</html>

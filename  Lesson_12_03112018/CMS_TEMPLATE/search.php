<?php include_once 'includes/db.php' ?>

<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/nav.php' ?>



<?php
if (isset($_POST['search'])) {
$search = $_POST['search'];
$select_search = "SELECT * FROM posts WHERE tags LIKE '%$search%'";
$res_search = mysqli_query($con, $select_search);
$count = mysqli_num_rows($res_search);
if ($count == 0){
    echo "По вашему запросу ничего не найдено";
}
else {
//echo $count;
// print_r($res_search);
foreach ($res_search

         as $item){
?>

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Page Heading
            <small>Secondary Text</small>
        </h1>


        <
        !--First Blog Post-->
        <h2>
            <a href="#"><?= $item['title'] ?></a>
        </h2>
        <p class="lead">
            by <a href="index.php">Start Bootstrap</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?= $item['date'] ?></p>
        <hr>
        <img class="img-responsive" src="admin/images/<?= $item['image'] ?>" alt="">
        <hr>
        <p><?= $item['content'] ?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php
        }
        }
        }
        ?>

    </div>
    </div>

    <?php include_once 'includes/sidebar.php' ?>

</div>
<!-- /.row -->
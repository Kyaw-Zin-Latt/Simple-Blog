<?php require_once "front_panel/head.php" ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4" >
                    <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Search posts between &nbsp;<b>" <?php echo $_POST['start']; ?> "</b> &nbsp; and &nbsp; <b>" <?php echo $_POST['end']; ?> "</b>
                    </li>
                </ol>
            </nav>
            <div class="">
                <?php 
                
                $result = fSearchByDate($_POST['start'],$_POST['end']);

                if(count($result) == 0) {
                  echo alert("There is no result", "warning");
                } 
                
                ?>
                <?php foreach ($result as $p) { ?>
                    <?php include "single.php"; ?>
                <?php } ?>
                
            </div>
        </div>
        <?php require_once "right_sidebar.php"; ?>
    </div>
</div>


<?php require_once "front_panel/footer.php" ?>





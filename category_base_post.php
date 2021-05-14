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
                        <?php
                        $id = $_GET['category_id']; 
                        if(category($id)){
                            echo category($_GET['category_id'])['title'];
                        }else {
                            linkTo("index.php");
                        } 
                        ?> Category
                    </li>
                </ol>
            </nav>
            <div class="">
                <?php foreach (fPostByCat($_GET['category_id']) as $p) { ?>
                    <?php 
                    if(isset($p['id'])) {
                        
                         include "single.php";
                    }else{
                        die($p['id']);
                    }    
                    ?>
                <?php } ?>
                
            </div>
        </div>
        <?php require_once "right_sidebar.php"; ?>
    </div>
</div>


<?php require_once "front_panel/footer.php" ?>





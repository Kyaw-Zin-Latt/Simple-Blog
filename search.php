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
                        Search by &nbsp;<b>" <?php echo $_POST['search_key']; ?> "</b>
                    </li>
                </ol>
            </nav>
            <div class="">
                <?php 
                
                $result = fSearch($_POST['search_key']);

                if(count($result) == 0) {
                  echo alert("There is no result", "warning");
                } 
                
                ?>
                <?php foreach (fSearch($_POST['search_key']) as $p) { ?>
                    <div class="card shadow-sm mb-4 post">
                        <div class="card-body">
                            <a href="detail.php?id=<?php echo $p['id']; ?> ">
                                <h4 class=" text-black">
                                    <?php echo $p['title']; ?>
                                </h4>
                            </a>
                            <!-- for user, category, date start-->
                            <div class="my-3">
                                <i class="feather-user text-primary"></i>
                                <?php echo user($p['user_id'])['name']; ?>
                                <i class="feather-layers text-success"></i>
                                <?php echo category($p['category_id'])['title']; ?>
                                <i class="feather-calendar text-danger"></i>
                                <?php echo date("j M Y",strtotime($p['created_at'])); ?>
                            </div>
                            <!-- for user, category, date end-->
                            <p class="text-black-50">
                                <?php echo short(strip_tags(html_entity_decode($p['description'])),200); ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
        <?php require_once "right_sidebar.php"; ?>
    </div>
</div>


<?php require_once "front_panel/footer.php" ?>





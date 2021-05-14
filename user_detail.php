
<?php include "core/auth.php" ?>
<?php include "template/header.php"; ?>
<?php 

$id = $_GET['id'];
$current = user($id);

?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4" >
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/user_list.php">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Posts <?php echo $current['name']; ?> looked
                </li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0 ">
                        <i class="feather-info text-primary"></i> <?php echo $current['name']; ?> Detail
                    </h4>
                   <div class="">
                        <a href="<?php echo $url ?>/user_list.php" class="btn btn-outline-primary full-screen-btn">
                            <i class="feather-list "></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary full-screen-btn">
                            <i class="feather-maximize-2 "></i>
                        </a>
                    </div>
                </div>
                
                <hr>

                <div>
                    <?php foreach (viewerCountByUser($id) as $v) { ?> 
                       
                       <div class="card shadow-sm mb-4 post" onclick="goal('<?php echo $url; ?>/post_detail.php?id=<?php echo $v['post_id']; ?>')">
                           <div class="card-body">
                               <a href="detail.php?id=<?php echo $p['id']; ?> ">
                                   <h4 class=" text-black">
                                       <?php echo post($v['post_id'])['title']; ?>
                                   </h4>
                               </a>
                               <!-- for user, category, date start-->
                               <div class="my-3">
                                   <i class="feather-user text-primary"></i>
                                   <?php echo user($v['user_id'])['name']; ?>
                                   <i class="feather-layers text-success"></i>
                                   <?php echo category(post(($v['post_id']))['category_id'])['title']; ?>
                                   <i class="feather-calendar text-danger"></i>
                                   <?php echo date("j M Y",strtotime(post($v['post_id'])['created_at'])); ?>
                               </div>
                               <!-- for user, category, date end-->
                               <p class="text-black-50">
                                   <?php echo short(strip_tags(html_entity_decode(post($v['post_id'])['description'])),200); ?>
                               </p>
                           </div>
                       </div>
       
                   <?php } ?>
                </div>
                               
            </div>
        </div>   
    </div>
</div>
<?php include "template/footer.php"; ?>
<script>
    $(".table").dataTable(
        {
            "order":[[0, "desc    "]]
        }
    );
</script>

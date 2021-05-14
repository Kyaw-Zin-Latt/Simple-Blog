<?php include "core/auth.php" ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4" >
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ads</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0 ">
                        <i class="feather-list text-primary"></i> Ads List
                    </h4>
                   <div class="">
                        <a href="<?php echo $url ?>/ads_add.php" class="btn btn-outline-primary">
                            <i class="feather-plus-circle "></i>
                        </a>
                        <a href="#" class="btn btn-outline-secondary full-screen-btn">
                            <i class="feather-maximize-2 "></i>
                        </a>
                    </div>
                </div>
                
                <hr>

                <table class="table table-hover mt-3 mb-0 table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Owner</th>
                            <th class="w-25">Advertisement</th>
                            <th>Expired Date</th>
                            <th>Control</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach (adsAll() as $a) {

                        ?>
                            <tr>
                                <td><?php echo $a['id']; ?></td>
                                <td class="text-nowrap"><?php echo $a['owner_name']; ?></td>
                                <td class="">
                                    <img src="<?php echo $a['photo']; ?>" class="w-100" alt="">
                                </td>
                                <td>
                                <?php 
                                
                                $endDate = showTime($a['end'],"d");;
                                $today = date("d");
                                $expiredDate = $endDate - $today;
                                

                                if($expiredDate<=0){
                                
                                ?>
                                    <span class="badge badge-pill badge-danger">Expired</span>
                                <?php 
                                }else {
                                    echo $expiredDate;  
                                }
                                ?>
                                </td>
                                <td class="text-nowrap">
                                    <a href="post_detail.php?id=<?php echo $a['id']; ?>" class="btn btn-outline-success btn-sm "><i class="feather-info fa-fw"></i></a>
                                    <a href="ads_delete.php?id=<?php echo $a['id']; ?>" class="btn btn-outline-danger btn-sm " onclick="return confirm('Are u sure to delete.😊')"><i class="feather-trash-2 fa-fw"></i></a>
                                    <a href="ads_edit.php?id=<?php echo $a['id']; ?>" class="btn btn-outline-warning btn-sm "><i class="feather-edit fa-fw"></i></a>
                                </td>
                                <td class="text-nowrap"><?php echo showTime($a['created_at'],"h:i"); ?></td>
                            </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
                               
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

<?php include "core/auth.php" ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4" >
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/ads_list.php">Ads</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Ads</li>
            </ol>
        </nav>
    </div>
</div>
<?php

    $id = $_GET['id'];
    $current = adsOne($id);

    if(isset($_POST['updateAds'])) {
        if(adsUpdate()) {
            linkTo("ads_list.php");
        }
    }

?>

<form class="row" method="post">
    <div class="col-12 ">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0 ">
                        <i class="feather-plus-circle text-primary"></i> Update Ads
                    </h4>
                    <a href="<?php echo $url ?>/ads_list.php" class="btn btn-outline-primary">
                        <i class="feather-list "></i>
                    </a>
                </div>
                <hr>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Owner Name</label>
                            <input type="text" name="name" value="<?php echo $current['owner_name']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Photo</label>
                            <input type="text" name="photo" value="<?php echo $current['photo']; ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Link</label>
                        <input type="text" name="link" value="<?php echo $current['link']; ?>" class="form-control col-12" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Start</label>
                            <input type="date" name="start" value="<?php echo $current['start']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">End</label>
                            <input type="date" name="end" value="<?php echo $current['end']; ?>" class="form-control" required>
                        </div>
                    </div>

                    <button class="btn btn-primary" name="updateAds">Update Ads</button>
                    
                <hr>
                
            </div>
        </div>
    </div>
   
</form>
<?php include "template/footer.php"; ?>
<script>
    $("#description").summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 300,
          
          
          });
</script>

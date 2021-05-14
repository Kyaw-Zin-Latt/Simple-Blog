
<?php include "template/header.php"; ?>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4" >
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/item_list.php">Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0 ">
                        <i class="feather-plus-circle text-primary"></i> Add Item
                    </h4>
                    <a href="<?php echo $url ?>/item_list.php" class="btn btn-outline-primary">
                        <i class="feather-list "></i>
                    </a>
                </div>
                <hr>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="photo">
                                    Photo Upload

                                </label>
                                <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only support jpg and png"></i>

                                <input type="file"  name="photo" id="photo" class="form-control p-1" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="type">Item Type</label>
                                <select name="type" id="type" class="form-control custom-select">
                                    <option value="0">ကုန်ဆို</option>
                                    <option value="1">ကုန်ခြောက်</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cat">Category</label>
                                <select name="type" id="cat" class="form-control custom-select">
                                    <option value="" selected>Select Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subCat">Sub Category</label>
                                <select name="type" id="subCat" class="form-control custom-select">
                                    <option value="" selected>Select Sub Category</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="q">Item Quantity</label>
                                    <input type="quantity" class="form-control" id="q">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="unit">Unit</label>
                                        <select name="unit" id="unit" class="form-control custom-select">

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="des">Description</label>
                                <textarea name="des" id="des" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="btn btn-primary">Add Item</div>
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php"; ?>

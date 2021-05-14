<?php include "core/auth.php" ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4" >
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-xl-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <span>
                    <i class="feather-user border rounded-circle text-primary border-primary h5"></i>
                    <span class="font-weight-bolder h4" style="font-family: 'Roboto', sans-serif">PROFILE</span>
                </span>
                    <hr>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group d-flex">
                                    <div class="">
                                        <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="rounded-circle w-100" alt="">
                                    </div>
                                      <div class="pl-4">
                                          Update Photo [jpg,png]
                                          <input type="file"  name="photo" id="photo" class="form-control p-1" required>
                                      </div>

                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="Kyaw Zin Latt">
                                </div>
                                <div class="form-group">
                                    <label for="name">Login Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="admin@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label for="name">Password</label>
                                    <span class="badge badge-primary pl-1 ml-1">Unlock</span>
                                    <input type="password" id="pwd" class="form-control">
                                </div>

                                <li class="menu-spacer" style="list-style: none"></li>
                                <button type="button" class="btn btn-primary btn-sm ">  <i class="feather-user py-2 h5 m-0"></i><span class="h6 pl-3 py-2">UPDATE PROFILE</span></button>

                            </div>
                        </div>
                    </form>
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

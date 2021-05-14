<?php include "core/auth.php"; ?>
<?php include "core/isAdmin.php"; ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4" >
                <li class="breadcrumb-item"><a href="<?php echo $url ?>/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">users</li>
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
                        <i class="feather-users text-primary"></i> Users List
                    </h4>
                </div>
                
                <table class="table table-hover mt-3 mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Control</>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach (users() as $c) {

                        ?>
                            <tr>
                                <td><?php echo $c['id']; ?></td>
                                <td><?php echo $c['name'] ?></td>
                                <td><?php echo $c['email'] ?></td>
                                <td><?php echo $role[$c['role']]; ?></td>
                                


                                <td>

                                    <a href="user_detail.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-success btn-sm "><i class="feather-info fa-fw"></i></a>
                                    <a href="post_delete.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-danger btn-sm " onclick="return confirm('Are u sure to delete.😊')"><i class="feather-trash-2 fa-fw"></i></a>
                                    <a href="post_edit.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-warning btn-sm "><i class="feather-edit fa-fw"></i></a>

                                </td>
                                <td><?php echo showTime($c['created_at'],"h:i"); ?></td>
                            </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
                               
            </div>
        </div>
    </div>
</div>
<?php include "template/footer.php"; ?>

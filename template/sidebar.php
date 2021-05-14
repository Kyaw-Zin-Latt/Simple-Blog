<div class="col-12 col-md-4 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center mt-3 py-2 nav-brand">
        <div class="d-flex align-items-center ">
                   <span class="bg-primary p-2 d-flex justify-content-center align-items-center rounded mr-2">
                       <i class="feather-shopping-bag mb-0 text-light h4"></i>
                   </span>
            <span class="font-weight-bolder h4 text-primary">My Shop</span>
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em"></i>
        </button>
    </div>
    <div class="nav-menu">
        <ul>

            <li class="menu-spacer"></li>

            <li class="menu-item">
                <a href="<?php echo $url ?>/dashboard.php" class="menu-item-link">
                    <span>
                        <i class="feather-home"></i>
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url ?>/index.php" class="menu-item-link">
                    <span>
                        <i class=" feather-arrow-right-circle"></i>
                        Go to news
                    </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url ?>/wallet.php" class="menu-item-link">
                    <span>
                        <i class="feather-dollar-sign"></i>
                        Wallet
                    </span>
                </a>
            </li>

            <li class="menu-title">
                <span>MANAGE PROFILE</span>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/profile.php" class="menu-item-link">
                    <span>
                        <i class=" feather-user"></i>
                        Your Profile
                    </span>
                </a>
            </li>
            
            
            <li class="menu-spacer"></li>

            <li class="menu-title">
                <span>MANAGE POSTS</span>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/post_add.php" class="menu-item-link">
                    <span>
                        <i class="feather-plus-circle"></i>
                        Add Post
                    </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/post_list.php" class="menu-item-link">
                    <span>
                        <i class="feather-list"></i>
                        Post List
                    </span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary p-1">
                        <?php echo countTotal("posts"); ?>
                    </span>
                </a>
            </li>
           
            <li class="menu-spacer"></li>

            <li class="menu-title">
                <span>MANAGE ADS</span>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/ads_add.php" class="menu-item-link">
                    <span>
                        <i class="feather-plus-circle"></i>
                        Add Ads
                    </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="<?php echo $url; ?>/ads_list.php" class="menu-item-link">
                    <span>
                        <i class="feather-list"></i>
                        Ads List
                    </span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary p-1">
                        <?php echo countTotal("ads"); ?>
                    </span>
                </a>
            </li>

            <?php if($_SESSION['user']['role'] <= 1) { ?>
            
            <li class="menu-title">
                <span>Setting</span>
            </li>

            <li class="menu-item">
                <a href="category_add.php" class="menu-item-link">
                    <span>
                        <i class="feather-layers"></i>
                        Category Manager
                    </span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary p-1">
                        <?php echo countTotal("categories"); ?>
                    </span>
                </a>
            </li>

            <?php if($_SESSION['user']['role'] ==  0) { ?>

            <li class="menu-item">
                <a href="user_list.php" class="menu-item-link">
                    <span>
                        <i class="feather-users"></i>
                        User Manager
                    </span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary p-1">
                        <?php echo countTotal("users"); ?>
                    </span>
                </a>
            </li>

            <?php } ?>


            <?php } ?>


            <li class="menu-spacer"></li>

            <li class="menu-item rounded" style="background-color: rgb(255 172 172 / 61%);">
                <a href="<?php echo $url ?>/logout.php" class="menu-item-link">
                    <span>
                        <i class="feather-lock text-danger"></i>
                        <span class="text-danger">Logout</span>
                    </span>
                </a>
            </li>

            <li class="menu-spacer"></li>

        </ul>
    </div>
</div>
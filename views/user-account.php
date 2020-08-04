<!-- header -->
<?php include_once '../components/header.php'; ?>

<div class="container my-5">
    <div class="row">
        <div class="col">
            <h3 class="my-4 container">My Dashboard</h3>
        </div>
    </div>

    <div class="row">
        <div class="col col-md-5">
            <!-- sidebar -->
            <?php  ?><div class="nav flex-column nav-pills bg-light">
                <a class="account-tab-link border" href="../views/user-profile.php">My Profile</a>
                <a class="account-tab-link border" href="../views/user-orders.php">Orders</a>
                <a class="account-tab-link border" href="../views/user-wishlist.php">Wish
                    Lists</a>
            </div>
        </div>

    </div>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>
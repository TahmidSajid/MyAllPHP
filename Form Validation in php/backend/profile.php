<?php require_once('../components/header.php') ?>

<div class="container">
    <div class="row">


        <div class="col-lg-6">
            <form action="profile_post.php" method="post">
                <div class="card">
                    <div class="card-header">Name Change</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" required name="name" value="<?php
                                                                                                    if (isset($_SESSION['s_name'])) {
                                                                                                        echo  $_SESSION['s_name'];
                                                                                                    }
                                                                                                    ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="name_change">Change</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-6">
            <form action="profile_post.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">Photo Change</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="file" required class="form-control" name="photo">
                            </div>
                            <button type="submit" class="btn btn-primary" name="photo_change">Photo Change</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-6">
            <form action="profile_post.php" method="post">
                <div class="card">
                    <div class="card-header">Email Change</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" required name="email" value="<?php
                                                                                                        if (isset($_SESSION['s_email'])) {
                                                                                                            echo  $_SESSION['s_email'];
                                                                                                        }
                                                                                                        ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="email_change">Change</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-6">
            <form action="profile_post.php" method="post">
                <div class="card">
                    <div class="card-header">Password Change</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="password" class="form-control mt-3" placeholder="Old Password" name="old_password">
                                <input type="password" class="form-control mt-3" placeholder="New Password" name="new_password">
                                <input type="password" class="form-control mt-3" placeholder="Confirm Password" name="confirm_new_password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="password_change">Password Change</button>
                        </form>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>



<?php require_once('../components/footer.php') ?>
<?php
require_once('components/hearder.php');
?>


<div class="row">
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/buttons.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Name change</label>
                    <input type="text" class="form-control" name="name" placeholder="new name">
                    <button type="submit" class="btn btn-info mt-4" name="name_change">Change name</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/buttons.php" method="post" class="margin-top:50px;" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">Photo Change</label>
                    <input type="file" class="form-control" name="photo">
                    <button type="submit" class="btn btn-info mt-4" name="photo_change">Change photo</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/buttons.php" method="post" class="margin-top:50px;" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">password change</label>
                    <input type="password" class="form-control mt-3" placeholder="old_password" name="old_password">
                    <input type="password" class="form-control mt-3" placeholder="new_password" name="new_password">
                    <input type="password" class="form-control mt-3" placeholder="confirm_password" name="confirm_password">
                    <button type="submit" class="btn btn-info mt-4" name="password_change">Change password</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php
require_once('components/footer.php');
?>
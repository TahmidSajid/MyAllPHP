<?php
require_once("components/hearder.php");
?>



<div class="row">
    <div class="col-lg-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/banner_backend.php" method="post" class="margin-top:50px;" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">Banner change</label>
                    <input type="text" class="form-control mt-4" name="greeting" placeholder="greeting">
                    <input type="text" class="form-control mt-4" name="name" placeholder="name">
                    <textarea type="text" class="form-control mt-4" name="description" placeholder="description" rows="4"></textarea>
                    <input type="file" class="form-control mt-4" name="photo" placeholder="photo">
                    <button type="submit" class="btn btn-info mt-4" name="name_change">Change banner</button>
                </form>
            </div>
        </div>
    </div>
</div>



























<?php
require_once("components/footer.php");
?>
<?php
require_once('components/hearder.php');
?>


<div class="row">
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            <div class="card-body d-flex justify-content-between">
                <form action="backend/buttons.php" method="post">
                    <label for="exampleInputEmail1" class="form-label">Name change</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="new name">
                    <button type="submit" class="btn btn-info mt-4" name="name_change">Change name</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/buttons.php" method="post" enctype="multipart/form-data">
                    <label for="exampleInputEmail1" class="form-label">Photo change</label>
                    <input class="form-control form-control-lg m-b-sm" type="file" name="photo">
                    <button type="submit" class="btn btn-info" name="photo_change">Change photo</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php
require_once('components/footer.php');
?>
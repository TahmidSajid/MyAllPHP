<?php
require_once('components/hearder.php');
?>


<div class="row">
    <div class="col-xl-4">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/buttons.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Name change</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="new name">
                    <button type="submit" class="btn btn-info mt-4" name="name_change">Change name</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php
require_once('components/footer.php');
?>
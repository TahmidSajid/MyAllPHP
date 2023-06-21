<?php

require_once("components/hearder.php");
$service_id = $_GET['id'];
$select_info = "SELECT * FROM services WHERE id='$service_id';";
$select_impli = mysqli_query($data_connect,$select_info);
$info_assoc = mysqli_fetch_assoc($select_impli);

?>










<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/service_update_backend.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Update Service</label>
                    <input type="text" class="form-control mt-4 d-none" name="id" value="<?=$service_id?>">
                    <input type="text" class="form-control mt-4" name="service_name" placeholder="service name" value="<?=$info_assoc['service_name']?>">
                    <textarea type="text" class="form-control mt-4" name="service_des" placeholder="description" rows="4"><?=$info_assoc['service_des']?></textarea>
                    <input type="text" class="form-control mt-4" name="icon" placeholder="icon name" value="<?=$info_assoc['icon']?>">
                    <select class="form-select mt-4" aria-label="Default select example">
                        <option name="deactive" value="deactive" <?php if($info_assoc['status']=='deactive'){echo'selected';}?>>deactive</option>
                        <option name="active" value="active" <?php if($info_assoc['status']=='active'){echo'selected';}?>>active</option>
                    </select>
                    <button type="submit" class="btn btn-info mt-4" name="update_change">Update service</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
require_once("components/footer.php");

?>
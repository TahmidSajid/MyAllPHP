<?php 
require_once('components/hearder.php');
$port_id = $_GET['id'];
$select_info = "SELECT * FROM portfolio WHERE id='$port_id';";
$select_impli = mysqli_query($data_connect,$select_info);
$info_assoc = mysqli_fetch_assoc($select_impli);


?>




<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/portfolio_update_backend.php" method="post" enctype="multipart/form-data" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Update Portfolio</label>
                    <input type="text" class="form-control mt-4 d-none" name="id" value="<?=$port_id?>">
                    <input type="text" class="form-control mt-4" name="type" placeholder="Portfolio Type" value="<?=$info_assoc['type']?>">
                    <textarea type="text" class="form-control mt-4" name="name" placeholder="Portfolio Name" rows="4"><?=$info_assoc['name']?></textarea>
                    <input type="file" class="form-control mt-4" name="port_photo" value="<?=$info_assoc['port_photo']?>">
                    <input type="text" class="form-control mt-4" name="port_heading" placeholder="Portfolio Heading" value="<?=$info_assoc['port_heading']?>">
                    <input type="text" class="form-control mt-4" name="port_des" placeholder="Portfolio Description" value="<?=$info_assoc['port_des']?>">
                    <button type="submit" class="btn btn-info mt-4" name="update_change">Update Portfolio</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php require_once('components/footer.php');?>
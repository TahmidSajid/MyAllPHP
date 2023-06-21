<?php
require_once('components/hearder.php')
?>



<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/service_backend.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Add Service</label>
                    <input type="text" class="form-control mt-4" name="service_name" placeholder="service_name">
                    <textarea type="text" class="form-control mt-4" name="service_des" placeholder="description" rows="4"></textarea>
                    <div class="row d-flew justify-content-between align-items-center">
                        <div class="col-lg-6"><input type="text" class="form-control mt-4 icon_input" name="icon" placeholder="icon name" <?php if(isset($_GET['icon'])){?>value="<?=$_GET['icon'];?>"<?php };?>>
                        <label for="exampleInputEmail1" style="font-size: 15px;" class="form-label mt-4">Icon:</label></div>
                        <div class="col-lg-4"><i  <?php if(isset($_GET['icon'])){?>class="<?=$_GET['icon'];?>"<?php };?> style="font-size: 25px; margin-top:-20px;"></i></div>
                    </div>
                    <select class="form-select mt-4" aria-label="Default select example" name="status">
                        <option value="active">active</option>
                        <option value="deactive">deactive</option>
                    </select>
                    <button type="submit" class="btn btn-info mt-4" name="name_change">Add Service</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card widget widget-stats">
            <div class="card-body">
                <form action="" method="post" class="margin-top:50px;">
                    <?php
                    $select_icons="SELECT * FROM icons;";
                    $after_icons = mysqli_query($data_connect,$select_icons);
                    foreach ($after_icons as $value) {?>
                        
                        <a class="mt-4" type="submit" style="text-decoration:none; color:black; height:50px; width:50px; font-size: 25px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:50%" href="?icon=<?=$value['icon']?>"><i class="<?= $value['icon']?> d-flex justify-content-center mt-3"></i></a>
                    <?php    
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Service name</th>
                    <th scope="col">Service detail</th>
                    <th scope="col">Icon name (font awesome)</th>
                    <th scope="col">Status</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query = "SELECT * FROM services;";
                $select_impliment = mysqli_query($data_connect,$select_query);
                foreach($select_impliment as $key => $value){?>
                    <tr>
                    <th scope="row"><?=++$key?></th>
                    <td><?=$value['service_name']?></td>
                    <td><?=$value['service_des']?></td>
                    <td><?=$value['icon']?></td>
                    <td><?=$value['status']?></td>
                    <?php
                    $service_id = $value['id']
                    ?>
                    <td class="d-flex justify-content-between" ><a style="text-decoration: none;" class="alert alert-info me-2" href="service_edit.php?id=<?=$service_id?>" type="submit">update</a>
                    <a class="alert alert-danger" href="backend/service_delete.php?id=<?=$service_id?>" style="text-decoration: none;">delete</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>































<?php
require_once('components/footer.php')
?>
<?php

require_once('components/hearder.php');

?>















<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/portfolio_backend.php" method="post" enctype="multipart/form-data" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Add Portfolio</label>
                    <input type="text" class="form-control mt-4" name="type" placeholder="portfolio type">
                    <input type="text" class="form-control mt-4" name="name" placeholder="portfolio name">
                    <input type="text" class="form-control mt-4" name="portfolio_heading" placeholder="portfolio Heading">
                    <textarea type="text" class="form-control mt-4" name="portfolio_des" placeholder="description" rows="4"></textarea>
                    <input type="file" class="form-control mt-4" name="photo name" placeholder="photo name">
                    <button type="submit" class="btn btn-info mt-4" name="portfolio_add">Add Portfolio</button>
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
                    <th scope="col">Type</th>
                    <th scope="col">Portfolio name</th>
                    <th scope="col">Portfolio Heading</th>
                    <th scope="col">Portfolio Description</th>
                    <th scope="col">portfolio Photo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query = "SELECT * FROM portfolio;";
                $select_impliment = mysqli_query($data_connect,$select_query);
                foreach($select_impliment as $key => $value){?>
                    <tr>
                    <th scope="row"><?=++$key?></th>
                    <td><?=$value['id']?></td>
                    <td><?=$value['type']?></td>
                    <td><?=$value['port_heading']?></td>
                    <td><?=$value['port_des']?></td>
                    
                    <td><img style="width: auto; height:50px;" src="components/portfolio-images\<?=$value['port_photo']?>" alt=""></td>
                    <?php
                    $port_id = $value['id']
                    ?>
                    <td class="d-flex justify-content-between" ><a style="text-decoration: none;" class="alert alert-info me-2" href="portfolio_update.php?id=<?= $port_id?>" type="submit">update</a>
                    <a class="alert alert-danger" href="backend/portfolio_delete.php?id=<?= $port_id?>" style="text-decoration: none;">delete</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>














<?php

require_once('components/footer.php');

?>
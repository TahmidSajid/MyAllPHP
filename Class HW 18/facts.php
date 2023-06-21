<?php
require_once("components/hearder.php")

?>







<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/facts_backend.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Add Facts</label>
                    <input type="text" class="form-control mt-4" name="facts_name" placeholder="facts_name">
                    <input type="number" class="form-control mt-4" name="count" placeholder="count">
                    <div class="row d-flew justify-content-between align-items-center">
                        <div class="col-lg-6"><input type="text" class="form-control mt-4 icon_input d-none" name="icon" placeholder="icon name">
                        <label for="exampleInputEmail1" style="font-size: 15px;" class="form-label mt-4">Icon:</label></div>
                        <div class="col-lg-4"><i class="added_icon mt-4" style="font-size: 25px; margin-top:20px"></i></div>
                    </div>
                    <button type="submit" class="btn btn-info mt-4" name="Add_facts">Add Facts</button>
                </form>
                <label for="exampleInputEmail1" class="form-label">Add Icon</label>
                <div class="mylist" style="height:220px; width:570px; overflow-y:scroll;"></div>
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
                    <th scope="col">Fact name</th>
                    <th scope="col">Fact count</th>
                    <th scope="col">Icon name (font awesome)</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_query = "SELECT * FROM facts;";
                $select_impliment = mysqli_query($data_connect,$select_query);
                foreach($select_impliment as $key => $value){?>
                    <tr>
                    <th scope="row"><?=++$key?></th>
                    <td><?=$value['facts_name']?></td>
                    <td><?=$value['count']?></td>
                    <td><?=$value['icon']?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>























    <?php
    require_once("components/footer.php")

    ?>
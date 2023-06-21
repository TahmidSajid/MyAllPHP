<?php
require_once('components/hearder.php')
?>



<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/service_backend.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Add Service</label>
                    <input type="text" class="form-control mt-4" name="service_name" placeholder="service_name">
                    <textarea type="text" class="form-control mt-4" name="service_des" placeholder="description" rows="4"></textarea>
                    <input type="text" class="form-control mt-4" name="icon" placeholder="icon name">
                    <select class="form-select mt-4" aria-label="Default select example" name="status">
                        <option value="active">active</option>
                        <option value="deactive">deactive</option>
                    </select>
                    <button type="submit" class="btn btn-info mt-4" name="name_change">Add Service</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card widget widget-stats">
            <div class="card-body">
                <form action="backend/service_backend.php" method="post" class="margin-top:50px;">
                    <label for="exampleInputEmail1" class="form-label">Update Service</label>
                    <input type="text" class="form-control mt-4" name="pre_service_name" placeholder="previous service name">
                    <input type="text" class="form-control mt-4" name="service_name" placeholder="service name">
                    <textarea type="text" class="form-control mt-4" name="service_des" placeholder="description" rows="4"></textarea>
                    <input type="text" class="form-control mt-4" name="icon" placeholder="icon name">
                    <select class="form-select mt-4" aria-label="Default select example" name="status">
                        <option value="active">active</option>
                        <option value="deactive">deactive</option>
                    </select>
                    <button type="submit" class="btn btn-info mt-4" name="update_change">Update service</button>
                </form>
            </div>
        </div>
    </div>
</div>






























<?php
require_once('components/footer.php')
?>
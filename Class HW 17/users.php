<?php
require_once('components/hearder.php')
?>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Active usres<span class="badge badge-success badge-style-light" style="font-size: 12px;"><?php
                                                                                                                                $active_query = "SELECT COUNT(*)as numbers FROM users;";
                                                                                                                                $active_users = mysqli_query($data_connect,$active_query);
                                                                                                                                $active_assoc = mysqli_fetch_assoc($active_users)['numbers'];
                                                                                                                                print_r($active_assoc);
                                                                                                                                ?></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="widget-list-content list-unstyled">
                                            <?php
                                            $user_info = "SELECT name,email FROM users;";
                                            $user_final = mysqli_query($data_connect,$user_info);
                                            foreach ($user_final as $key => $value) {?>
                                            <li class="widget-list-item widget-list-item-green">
                                                <span class="widget-list-item-icon d-flex align-items-center justify-content-center" style="align-items: center;"><?php echo $key+1;?></span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        <?php echo $value['name'];?>
                                                    </a>
                                                    <span class="widget-list-item-description-subtitle">
                                                    <?php echo $value['email'];?>
                                                    </span>
                                                </span>
                                                <form action="delete.php" method="post">
                                                    <input class="d-none" type="text" name="email" value="<?php
                                                        echo $value['email'];
                                                    ?>">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require_once('components/footer.php')
?>
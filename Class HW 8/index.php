<?php
require_once("commons/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title text-center text-light">
                            <h4>Calculator</h4>
                            <hr>
                        </div>
                        <form action="" method="post">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label text-light">Number one:</label>
                                        <input type="text" class="form-control" placeholder="Enter number" name="a">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label text-light">Number two:</label>
                                        <input type="text" class="form-control" placeholder="Enter number" name="b">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <?php
                                    if (isset($_POST["a"]) && isset($_POST["b"])) :
                                    ?>
                                        <?php
                                        $numberOne = $_POST["a"];
                                        $numberTwo = $_POST["b"];
                                        if ($numberOne) {
                                        ?>
                                            <?php
                                            if ($numberTwo) {
                                            ?>
                                                <label for="exampleInputPassword1" class="form-label text-light">Result:</label>
                                                <div class="alert alert-success" role="alert">
                                                    <?php
                                                    if (isset($_POST["sum"])) {
                                                        echo $numberOne + $numberTwo;
                                                    }
                                                    if (isset($_POST["sub"])) {
                                                        echo $numberOne - $numberTwo;
                                                    }
                                                    if (isset($_POST["mul"])) {
                                                        echo $numberOne * $numberTwo;
                                                    }
                                                    if (isset($_POST["div"])) {
                                                        echo $numberOne / $numberTwo;
                                                    }
                                                    ?>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <label for="exampleInputPassword1" class="form-label text-light">Error</label>
                                                <div class="alert alert-warning" role="alert">
                                                    input number two
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        <?php
                                        } else {
                                        ?>
                                            <label for="exampleInputPassword1" class="form-label text-light">Error</label>
                                            <div class="alert alert-warning" role="alert">
                                                input number one
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <button type="submit" class="btn btn-primary" name="sum">
                                        <i class="fa-regular fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <button type="submit" class="btn btn-secondary" name="sub">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <button type="submit" class="btn btn-success" name="mul">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <div class="col-lg-3 text-center">
                                    <button type="submit" class="btn btn-danger" name="div">
                                        <i class="fa-solid fa-divide"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once("commons/footer.php");
?>
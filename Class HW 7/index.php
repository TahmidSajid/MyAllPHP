<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Calculator</h4>
                        </div>
                        <form action="calculator.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Number one</label>
                            <input type="text" class="form-control" name="number-one">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Number two</label>
                            <input type="text" class="form-control" name="number-two">
                        </div>
                        <button type="submit" class="btn btn-info" name="add"><i class="fa-solid fa-plus"></i></button>
                        <button type="submit" class="btn btn-warning" name="sub"><i class="fa-solid fa-minus"></i></button>
                        <button type="submit" class="btn btn-success" name="mul"><i class="fa-solid fa-xmark"></i></button>
                        <button type="submit" class="btn btn-danger" name="div"><i class="fa-solid fa-divide"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
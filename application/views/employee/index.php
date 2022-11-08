<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS & BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-4">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h4>Employee DATA</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php base_url()?>Employee/add" method="post">

                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Name</label>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="username" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Username</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mt-3">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mt-3">
                                        <input type="text" name="phonenum" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mt-3">
                                        <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Email</label>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="text-center">
                                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                    <button class="btn btn-primary" name="submit" >Submit</button>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
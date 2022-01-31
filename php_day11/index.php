<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="asset/css/bootstrap.css" rel="stylesheet"/>
    <link href="asset/css/all.css" rel="stylesheet"/>
    <link href="asset/css/style.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">logo</a>
            <ul class="navbar-nav">
                <li><a class="nav-link">Example One</a></li>
                <li><a class="nav-link">Example Two</a></li>
            </ul>
        </div>
    </nav>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">fill up</div>
                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">first name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">last name</label>
                                        <div class="col-md-9">
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">full name</label>
                                        <div class="col-md-9">
                                            <input type="text" value="<?php echo isset($result) ? $result : ''?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="asset/js/jquery-3.6.0.js"></script>
    <script src="asset/js/bootstrap.js"></script>
</body>
</html>
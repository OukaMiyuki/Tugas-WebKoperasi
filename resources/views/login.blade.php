<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koperasi Zazu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di Koperasi Zazu</h1>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img img-responsive d-none d-sm-block" src="https://i.imgur.com/vaicIqP.png" />
                </div>
                <div class="col-md-6">
                    <h2>Masuk</h2>
                    <form method="POST" action="/masuk">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="usrnm">Username</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" id="usrnm" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" id="pass" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<!DOCTYPE html>

<html>
    <head>

        <title>JustMe Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body class="bg-info">
        <div class="container" style="margin-left:450px">
            <div class="col-lg-5"></div>
            <div class="col-lg-5">
                <div class="jumbotron" style="margin-top:150px">
                    <h4 style="text-align:center">JustMe Login</h4>

                    <form action="validate" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox">Remember Me</label>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary form-control">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5"></div>
        </div>
    </body>
</html>

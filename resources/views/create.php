<!DOCTYPE html>

<html>
    <head>
        <title>Add User</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>

    <body>
        <div class="container" style="margin-left:0px">
            <div class="col-lg-5"></div>
            <div class="col-lg-5">
                <div class="jumbotron" style="margin-top:150px">
                    <h4 style="text-align:center">Add New User</h4>

                    <!-- create user form -->
                    <form action="create-user" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add" class="btn btn-success pull-right" value="Create">
                            <a href="dashboard" class="btn btn-danger pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5"></div>
        </div>
    </body>
</html>
<!DOCTYPE html>

<html>

<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

            <div class="container">
                <div class="col-lg-5"></div>
                <div class="col-lg-5">
                    <div class="jumbotron" style="margin-top:150px">
                        <h4 style="text-align:center">Update User Information</h4>

                    <?php
                        $id;
                        if (isset($_POST['editButton'])) {
                            $search_ID = $_POST['idUpdate'];
                            for ($x = 0; $x < count($id); $x++) {
                                if ($id[$x]->id == $search_ID) {
                        ?>
                                <form action="update" method="post">
                                        <input type="hidden" name="search_ID" value="<?php echo $id[$x]->id; ?>">
                                <div class="form-group">
                                    <input type="text" name="username" value="<?php echo $username[$x]->username; ?>" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="password" value="<?php echo $password[$x]->password; ?>" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="add" class="btn btn-success pull-right" value="Update">
                                    <a href="dashboard" class="btn btn-danger pull-right">Cancel</a>
                                </div>
                            </form>
                        <?php
                                }
                        
                            }
                        }
                        ?>
                </div>
                <div class="col-lg-5"></div>
            </div>

</body>

</html>
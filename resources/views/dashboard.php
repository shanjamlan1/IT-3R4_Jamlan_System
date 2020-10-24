<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="container" style="padding-top:50px">
                        <h2>User Information</h2>
                    </div>
                    <div class="page-header clearfix">
                        <a href="login" class="btn btn-warning pull-right">Logout</a>  
                        <!-- Create form-->
                        <form action="create" method="post">
                                <input type="submit" name="create" class="btn btn-info pull-left" value="Add new User">
                            
                        </form>
                    </div>
                    <?php
                    if(!empty($id)){
                        echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Username</th>";
                                        echo "<th>Password</th>";
                                        echo "<th>Update</th>";
                                        echo "<th>Delete</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";

                        for($x=0; $x < count ($id); $x++){
                    ?>
                            <tr>
                                <td> <?php echo $id[$x]->id;?></td>;
                                <td> <?php echo $username[$x]->username;?></td>;
                                <td> <?php echo $password[$x]->password;?></td>;

                                <td class="text-center"> 
                                <form action="edit" method="post">
                                    <input type="hidden" name="idUpdate" value="<?php echo $id[$x]->id; ?>">
                                    <button type="submit" name="editButton" class="btn btn-success">UPDATE</button>
                                </form>
                                </td>
                                <td class="text-center"> 
                                    <form action="delete" method="post">
                                        <input type="hidden" name="idDelete" value="<?php echo $id[$x]->id; ?>">
                                        <button type="submit" name="deleteButton" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>     
                            </tr>
                    <?php
                        }
                    }else{
                        echo "No record found. Add user first to view data in the dashboard.";
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
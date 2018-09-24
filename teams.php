<?php include ("conn.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $detail=$_REQUEST['desc'];
    $name=$_REQUEST['name'];

   $query= $conn->query("UPDATE team SET details='$detail' WHERE team_name='$name'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="css/sp.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        desklink{
            color:#ffffff !important;
        }
        .desklink:hover{
            color:#9E9FA1;
        }
        .desklink:active{
            color:#170975;
        }
        .logo{
            padding-top:0;
            text-align: center;
            margin-bottom: 2%;
        }
    </style>
</head>
<body>

<div class="col-sm-2 sidepanel secretm" style="position: fixed;">
    <ol style="list-style: none;    -webkit-padding-start: 0px;">
        <li class="logo"><img src="images/CAF_logo.png" style="height:100px;"></li>
        <a href="dashboard.html" class="desklink"> <li class="li-menu effect"><i class="fa fa-th-large" aria-hidden="true"></i> <b style="margin-left: 10px;">  Dashboard</b></li></a>
        <li class="li-menu active"><a href="#" class="desklink active"><i class="fa fa-group" aria-hidden="true"></i>  <b style="margin-left: 10px;"> Teams</b></a></li>
        <a href="players.php" class="desklink"><li class="li-menu effect" style="margin-left: 4px"><i class="fa fa-child" aria-hidden="true"></i> <b style="margin-left: 10px;">  Fan Map</b></li></a>
        <a href="index.html" class="desklink"><li class="li-menu effect" style="margin-left: 4px"><i class="fa fa-power-off" aria-hidden="true"></i> <b style="margin-left: 10px;">  Log Out</b></li></a>
    </ol>

</div>
<div class="col-sm-10 pad-zero" style="margin-left: 225px">
    <h3 >Top Teams</h3>
    <?php
    $query=$conn->query("SELECT * FROM team");
    while($row=mysqli_fetch_array($query)){
    $name=$row['team_name'];
    $image=$row['image'];
    $desc=$row['details'];

    ?>
    <div class="col-sm-6 top">

        <h3 style="text-align: center"><?php echo $name;?></h3>
        <img src="<?php echo $image;?>" style="width:100%;height:300px;">
        <h5 style="text-align: justify;height:120px;"><?php echo $desc;?></h5>
        <p data-toggle="modal" data-target="#myModal<?php echo $name;?>" style="float:right;cursor: pointer">Edit / Add detail</p>
    </div>
        <div class="modal fade" id="myModal<?php echo $name;?>" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"  style="border-radius: 2%">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="memberModalLabel">Edit Team Details</h4>

                    </div>
                    <div class="modal-body">
                        <div class="form-group" >
                            <form method="post">

                                <textarea style="width: 100%;" name="desc" rows="5" maxlength="600"><?php echo $desc;?></textarea>
                                <input type="hidden" name="name" value="<?php echo $name;?>">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn select_team" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
</div>


</body>
</html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.metisMene.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  function myword(){
    alert("Group 16!!!");
  }
</script>
<title>Mobile Recommendation</title>
</head>
<body>
  <div class="container">

    <?php 
        include('header.php');
        require('conn.php');
        $display=$_POST["display"];
        $front=$_POST["front"];
        $back=$_POST["back"];
        $game=$_POST["game"];
        $battery=$_POST["battery"];
        $charge=$_POST["charge"];

        $color=1;
        $gender=$_POST["gender"];
        if ($gender == "F") {
          $color=$color+0.5;
        }

        $sql="select id, name, price, cpu, battery_capacity, weight, ($display*display_score + $front*selfie_score + $back*back_cam + $game*cpu_rank + $charge*battery_charge + $battery*battery_life + customer_service + $color*color_selection + water_proof) as score";
        if($_POST["price"]==0){
          $sql=$sql . " from mobile order by score desc limit 5;";
        } else{
          $price=$_POST["price"];
          $sql=$sql . " from mobile where price <= $price order by score desc limit 5;";
        }

        // $result=mysqli_query($conn, $sql);
        // $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $rows=getResults($conn, $sql);
        // echo json_encode($row, true);

    ?>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-info" href="index.php">Index</a>
      </div>
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-primary" href="recommendation.php">Recommendation</a>
      </div>
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-info" href="top.php">TOP 10</a>
      </div>
    </div>

    <div class="row">
      <h1>Recommendation For You:</h1>
    </div>

    <?php
        for ($i=0; $i < sizeof($rows); $i++) { 
    ?>
    <div class="row" id="content">
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <img class="img-responsive" style="height: 255px;" src=<?php echo "images/".$rows[$i]["id"].".jpg";?>>
      </div>
      <div class="col-md-7" style="padding-top: 10px; padding-bottom: 10px;">
        <p><strong>Phone name:</strong>  <?php echo $rows[$i]["name"]; ?></p>
        <p><strong>CPU:</strong>  <?php echo $rows[$i]["cpu"]; ?></p>
        <p><strong>Battery capacity:</strong>  <?php echo $rows[$i]["battery_capacity"]; ?> mAh</p>
        <p><strong>Weitgh:</strong>  <?php echo $rows[$i]["weight"]; ?> g</p>
        <hr>
        <h3><strong>Total Score:</strong></h3> <p style="font-size: 25px;"><?php echo $rows[$i]["score"]; ?></p>
      </div>
      <div class="col-md-1"></div>
    </div>
    
    <?php  }; ?>


    <?php 
        include('footer.php');
    ?>

  </div>


</body>
</html>

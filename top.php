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

        $sql="select id, name, price, battery_capacity,(display_score + selfie_score + back_cam + cpu_rank + battery_charge + battery_life) as score from mobile order by score desc limit 10;";

        $result=mysqli_query($conn, $sql);
        $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-info" href="index.php">Index</a>
      </div>
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-info" href="recommendation.php">Recommendation</a>
      </div>
      <div class="btn-group" role="group">
        <a type="button" class="btn btn-primary" href="top.php">TOP 10</a>
      </div>
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
        <p><strong>Phone name:</strong>  <?php echo $rows[$i]["name"]; ?></p>
        <p><strong>Phone name:</strong>  <?php echo $rows[$i]["name"]; ?></p>
        <p><strong>Phone name:</strong>  <?php echo $rows[$i]["name"]; ?></p>
        <p><strong>Phone name:</strong>  <?php echo $rows[$i]["name"]; ?></p>
        <p><strong>Phone name:</strong>  <?php echo $rows[$i]["name"]; ?></p>

        <p><strong>Total Score:</strong> <?php echo $rows[$i]["score"]; ?></p>
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

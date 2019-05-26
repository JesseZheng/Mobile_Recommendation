<div class="row">
  <div class="col-md-6"><img class="img-responsive title-logo" src="images/mob.png"></div>
  <div class="col-md-6 text-right text-uppercase">
    <h1 class="hover">Mobile Recommendation</h1>
    <h3 class="hover" onclick="myword()">Group 16</h3>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <hr>
  </div>
</div>

<?php

function getResults($connection, $sql){ 
    $query = mysqli_query($connection, $sql);  
    $results = array(); 
    if($query){ 
     while($row = mysqli_fetch_assoc($query)){ 
      $results[] = $row; 
     } 
    } 

    return $results; 
} 

?>
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
<body style=" background-image: linear-gradient(to right , #F8F9F9, #808B96);">
  <div class="container">

    <?php 
        include('header.php');
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

    <div>
      <form class="form-horizontal" method="post" action="result.php">

        <h1>Customize your needs</h1>
        <hr>

        <div class="form-group">
            <label class="col-sm-2 ">1. Price: </label>
            <div class="col-sm-4">
            <select name="price" class="form-control">
              <option value="2000">≤ 2000</option>
              <option value="3000">≤ 3000</option>
              <option value="4000">≤ 4000</option>
              <option value="5000">≤ 5000</option>
              <option value="0">don't care</option>
            </select>
            </div>
            <div class="col-sm-4">
              <p>SEK</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2">2. Gender: </label>
            <div class="col-sm-4">
              <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio1" value="M"> Male
              </label>
              <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio2" value="F"> Female
              </label>
            </div>
            <div class="col-sm-4">
              <br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">3. How often do you watch the video by mobile phone?</label>
            <div class="col-sm-12">
              <label class="radio-inline">
                <input type="radio" name="display" id="inlineRadio1" value="3"> Always
              </label>
              <label class="radio-inline">
                <input type="radio" name="display" id="inlineRadio2" value="2"> Sometimes
              </label>
              <label class="radio-inline">
                <input type="radio" name="display" id="inlineRadio3" value="1"> Seldom
              </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">4. How often do you use the front camera?</label>
            <div class="col-sm-12">
              <label class="radio-inline">
                <input type="radio" name="front" id="inlineRadio1" value="3"> Always
              </label>
              <label class="radio-inline">
                <input type="radio" name="front" id="inlineRadio2" value="2"> Sometimes
              </label>
              <label class="radio-inline">
                <input type="radio" name="front" id="inlineRadio3" value="1"> Seldom
              </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">5. How often do you take photo by mobile phone?</label>
            <div class="col-sm-12">
              <label class="radio-inline">
                <input type="radio" name="back" id="inlineRadio1" value="3"> Always
              </label>
              <label class="radio-inline">
                <input type="radio" name="back" id="inlineRadio2" value="2"> Sometimes
              </label>
              <label class="radio-inline">
                <input type="radio" name="back" id="inlineRadio3" value="1"> Seldom
              </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">6. How often do you play large mobile games?</label>
            <div class="col-sm-12">
              <label class="radio-inline">
                <input type="radio" name="game" id="inlineRadio1" value="3"> Always
              </label>
              <label class="radio-inline">
                <input type="radio" name="game" id="inlineRadio2" value="2"> Sometimes
              </label>
              <label class="radio-inline">
                <input type="radio" name="game" id="inlineRadio3" value="1"> Seldom
              </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">7. How much do you care about the battery life of mobile phone?</label>
            <div class="col-sm-12">
              <label class="radio-inline">
                <input type="radio" name="battery" id="inlineRadio1" value="3"> Very much
              </label>
              <label class="radio-inline">
                <input type="radio" name="battery" id="inlineRadio2" value="2"> A little
              </label>
              <label class="radio-inline">
                <input type="radio" name="battery" id="inlineRadio3" value="1"> Not at all
              </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">8. How much do you care about the charging speed of mobile phone?</label>
            <div class="col-sm-12">
              <label class="radio-inline">
                <input type="radio" name="charge" id="inlineRadio1" value="3"> Very much
              </label>
              <label class="radio-inline">
                <input type="radio" name="charge" id="inlineRadio2" value="2"> A little
              </label>
              <label class="radio-inline">
                <input type="radio" name="charge" id="inlineRadio3" value="1"> Not at all
              </label>
            </div>
        </div>

        <hr>
        <div class="form-group col-sm-12">
            <input type="submit" class="btn btn-info" value="Submit">
            <input type="reset" class="btn btn-warning" value="Reset">
        </div>
      </form>
    </div>


    <?php 
        include('footer.php');
    ?>

  </div>


</body>
</html>

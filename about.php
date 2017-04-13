<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/leave.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mild WebSite</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
          rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>

<div class="brand">ชุมชนคนรักสุขภาพ</div>
<div class="address-bar">คณะพยาบาลศาสต์ มหาวิทยาลัยพายัพเชียงใหม่</div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php">ชุมชนคนรักสุขภาพ</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">หน้าแรก</a>
                </li>
                <li>
                    <a href="about.php">คำนวนค่า BMI</a>
                </li>
                <li>
                    <a href="blog.php">คลิปการออกกำลังกาย</a>
                </li>
                <li>
                    <a href="contact.php">ติดต่อพวกเรา</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>เครื่องคำนวณหาค่าดัชนีมวลกาย</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="img/BMIFinal.png" alt="">
            </div>
            <div class="col-md-6">
                <p>การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) คือเป็นมาตรการที่ใช้ประเมินภาวะอ้วนและผอมในผู้ใหญ่
                    ตั้งแต่อายุ 20 ปีขึ้นไป สามารถทำได้โดยการชั่งน้ำหนักตัวเป็นกิโลกรัม และวัดส่วนสูงเป็นเซนติเมตร
                    แล้วนำมาหาดัชมีมวลกาย โดยใช้โปรแกรมวัดค่าความอ้วนข้างต้น</p>
                <form class="form-group" method="post">
                    <div class="form-group">
                        <label for="usr">Weight / นำหนัก (kg.):</label>
                        <input type="text" class="form-control" id="usr" name="weightIn">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Height (cm.) / ส่วนสูง</label>
                        <input type="text" class="form-control" id="pwd" name="HeightIn">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" id="pwd">
                    </div>
                </form>
                <?php
                error_reporting(0);
                $w = $_POST['weightIn'];
                $h = $_POST['HeightIn'] / 100;
                $h2 = $h * $h;
                $Cal = ($w / $h2);
                $value = number_format($Cal, 2);
                ?>
                <?php
                if ($value == 0) {
                    echo "<div class=\"panel\" style=\"background-color: rgba(255,255,255,0.9); color: white;font-weight: 600;\">";
                } else if ($value < 18.5 && $value != 0.00) {
                    echo "<div class=\"panel\" style=\"background-color: #eac748; color: white;font-weight: 600;\">";
                } else if ($value >= 18.5 && $value <= 22.9) {
                    echo "<div class=\"panel\" style=\"background-color: #008300; color: white;font-weight: 600;\">";
                } else if ($value >= 23.0 && $value <= 24.9) {
                    echo "<div class=\"panel\" style=\"background-color: #1594b9; color: white;font-weight: 600;\">";
                } else if ($value >= 25.0 && $value <= 29.9) {
                    echo "<div class=\"panel\" style=\"background-color: #0c3b54; color: white;font-weight: 600;\">";
                } else if ($value >= 30.0 && $value <= 34.9) {
                    echo "<div class=\"panel\" style=\"background-color: #f06b22; color: white;font-weight: 600;\">";
                } else if ($value >= 35.0 && $value <= 39.9) {
                    echo "<div class=\"panel\" style=\"background-color: #d84d20; color: white;font-weight: 600;\">";
                } else if ($value >= 40.0) {
                    echo "<div class=\"panel\" style=\"background-color: #bf2d1d; color: white;font-weight: 600;\">";
                }
                ?>
                <!--                <div class="panel" style="background-color: #008300; color: white;font-weight: 600;">-->
                <h2 style="padding-left: 10px;"><?php echo $value; ?></h2>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Our
                <strong>Team</strong>
            </h2>
            <hr>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
        </div>
        <div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

</div>
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

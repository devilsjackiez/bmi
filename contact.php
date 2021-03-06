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
                <h2 class="intro-text text-center">ติดต่อได้ที่
                    <strong>คณะพยาบาลศาสตร์ มหาวิทยาลัยพายัพ</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7554.086912889039!2d99.01433561037791!3d18.796216600475898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3ab48228ba85%3A0x427e1e87368ddbe0!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4LmB4Lih4LiE4LiE4Lit4Lij4LmM4Lih4Li04LiE!5e0!3m2!1sth!2sth!4v1490688158746"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>123.456.7890</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                </p>
                <p>Address:
                    <strong>133, ถนน แก้วนวรัฐ Thesaban Nakhon Chiang Mai,
                        <br>Amphoe Mueang Chiang Mai, Chang Wat Chiang Mai 50000</strong>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus
                        repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum
                        sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>-->
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

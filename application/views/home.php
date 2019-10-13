<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <title>Hola !</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/icomoon/icomoon.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main">

  <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm smoothscroll" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>

        <!-- Menu -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothscroll">Home</a></li>
            <li> <a href="#about" class="smoothscroll"> Resume</a></li>
            <li> <a href="#services" class="smoothscroll"> About</a></li>
            <li> <a href="#team" class="smoothscroll"> Portofilo</a></li>
            <!-- <li> <a href="#portfolio" class="smoothscroll"> Portfolio</a></li> -->
            <!-- <li> <a href="#blog" class="smoothscroll"> Blog</a></li> -->
            <li> <a href="#contact" class="smoothscroll"> Contact</a></li>
        </div>

      </div>
    </div>
  </div> 

  <!-- ==== HEADERWRAP ==== -->
  <div id="home"></div>
  <div id=<?php echo $info['foto']?> name="home">
    <header class="clearfix">
      <h1><span class="icon icon-shield"></span></h1>
      <p><?php echo $info['info']?></p>
      <!-- <p>Programming</p> -->
    </header>
  </div>
  <!-- /headerwrap -->

  
  <!-- ==== ABOUT ==== -->
  <div class="container" id="about" name="about">
    <div class="row white">
      <br>
      <h1 class="centered">BIO</h1>
      <hr>

      <div class="col-lg-2 centered">
        <img class="img-responsive" src="<?php echo $biodata['foto']?>">
      </div>
      
      <div class="col-lg-6">
        <!-- <p>Nama saya Farah Shafiyah Siti Maharani. Saat ini saya berusia 17 tahun. Status saya saat ini masih seorang pelajar di SMK Negeri 5 Malang.
          Saya pernah magang selama 6 bulan di Jl. Kauman.</p> -->
      </div>

      <div class="col-lg-6">
          <ul>
            <h4>Nama          : <?php echo $biodata['nama']?></h4>   <br>
            <h4>Tanggal Lahir : <?php echo $biodata['ttl']?></h4>  <br>
            <h4>Jenis Kelamin : <?php echo $biodata['jk']?></h4>  <br>
            <h4>Alamat        : <?php echo $biodata['alamat']?></h4>  <br>
            <h4>Email         : <?php echo $biodata['email']?></h4>  <br>
            <h4>Telepon       : <?php echo $biodata['wa']?></h4> <br>
          </ul>
        </div>
      <!-- col-lg-6 -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
  


  <!-- ==== SECTION DIVIDER1 -->
  <section class="section-divider textdivider divider1">
    <div class="container" row>
      <h1>RESUME</h1>
      <hr>
      <h2 class="container"><?php echo $biodata['resume']?></h2>
    </div>
    <!-- container -->
  </section>
  <!-- section -->

  <!-- ==== GREYWRAP ==== -->
  <div class="container" id="services" name="services">
    <div class="row white">
      <br>
      <h1 class="centered">WHAT I DO</h1>
      <hr>

    
<div id="greywrap">

  <div class="row">
  <?php
  foreach($skill as $data){
  ?>

    <div class="col-lg-4 callout">
      <span class="icon icon-file-3"></span>
      <h2><?php echo $data->nama_skill?></h2>
      <p><?php echo $data->ket_skill?></p>
    </div>
    <?php
  } ?>
  </div>

  <!-- row -->
</div>

<!-- greywrap -->


  <!-- ==== SERVICES ==== -->
  <div class="container" id="services" name="services">
    <br>
    <br>
    
    <div class="row">
      <h2 class="centered">PENDIDIKAN</h2>
      <hr>
      <br>
      <div class="col-lg-offset-2 col-lg-8">
      <?php
    foreach($pendidikan as $data){
      ?>
      <div class="col-lg-4 callout">
        <span class="icon icon-shield" style="margin-left: 80px"></span>
          <h2><?php echo $data->nama_pend?></h2>
          <p><?php echo $data->waktu_pend?></p>
      </div>

      <?php
    }
    ?>

          <!-- <div class="col-lg-4 callout">
              <span class="icon icon-shield" style="margin-left: 80px"></span>
              <h2>KB AL AHZAR</h2>
              <p>2005-2006</p>
          </div>

          <div class="col-lg-4 callout">
              <span class="icon icon-shield" style="margin-left: 80px"></span>
              <h2>TK AL AZHAR</h2>
              <p>Tahun 2006-2008</p>
          </div> -->

          <!-- <div class="col-lg-4 callout">
              <span class="icon icon-shield" style="margin-left: 80px"></span>
              <h2>SD NEGERI PURWODADI 1</h2>
              <p>2008-2014</p>
          </div>

          <div class="col-lg-4 callout">
              <span class="icon icon-shield" style="margin-left: 80px"></span>
              <h2>SMP NEGERI 11 MALANG</h2>
              <p>2014-2017</p>
          </div>

          <div class="col-lg-4 callout">
              <span class="icon icon-shield" style="margin-left: 80px"></span>
              <h2>SMK NEGERI 5 MALANG</h2>
              <p>2017-Present</p>
          </div> -->

          
        <!-- <p>KB AL AZHAR</p>
        <p>TK AL AZHAR</p>
        <p>SD NEGERI PURWODADI 1 MALANG</p>
        <p>SMP NEGERI 11 MALANG</p>
        <p>SMK NEGERI 5 MALANG</p>
        <p></p> -->
      </div>
      <!-- col-lg -->
    </div>
    <!-- row -->

    <div class="row">
      <h2 class="centered">PENGALAMAN</h2>
      <hr>
      <br>
      <div class="col-lg-offset-3 col-lg-10">
        <?php
        foreach($pengalaman as $data){
          ?>
          <p><?php echo $data->nama_peng?><br>
          <?php
        }
        ?>
      
      <!-- Saya pernah mengikuti program SMK Coding selama 5 pekan, setiap Sabtu & Minggu<br> -->
      <!-- Saya pernah mengikuti kegiatan Ezy Campus yang membuat aplikasi android pada saat magang<br> -->
      <!-- Saya pernah mengikuti seminar AWS Educate<br> -->

    </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->


  <!-- ==== SECTION DIVIDER2 -->
  <!-- <section class="section-divider textdivider divider2">
    <div class="container">
      <h1>DESIGN IS AN INTERACTION</h1>
      <hr>
      <p>To develop a deeper and more meaningful connection with consumers, we believe design must invite them to take part in the conversation.</p>
    </div>
    container -->
  </section>
  <!-- section -->

  <!-- ==== TEAM MEMBERS ==== -->
  <div class="container" id="team" name="team">
    <br>
    <div class="row white centered">
      <h1 class="centered">Projects</h1>
      <hr>
      <br>
      =======================================================<br>
      <br>
  
    </div>
    <!-- row -->
  </div>
  
  <!-- ==== SECTION DIVIDER6 ==== -->
  <div id="contact">
    <div class="container" >
      <h1 class="centered">Sosial Media</h1>
      <hr>
      <div class="col-lg-4 callout"  style="margin-left: 300px">
          <span style="margin-left: 60px"><a class="icon icon-instagram" href="<?php echo $instagram['link']?>"></a> </span>
          <h2>Instagram</h2>
      </div>
      
      <div class="col-lg-4 callout">
          <span style="margin-left: 60px"><a class="icon icon-mobile" href="<?php echo $whatsapp['link']?>"></a> </span>
          <h2>Whatsapp</h2>
      </div>
    </div>
  </div>


  <div class="container" name="contact">
    <div class="row">
      <br>
      <h1 class="centered">THANKS FOR VISITING US</h1>
      <hr>
      <br>
      <br>

      <!-- <div class="col-lg-4">
        <h3>About Us</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <h3>Newsletter</h3>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-4 control-label"></label>
            <div class="col-lg-10">
              <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="text1" class="col-lg-4 control-label"></label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="text1" placeholder="Your Name">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10">
              <button type="submit" class="btn btn-success">Sign in</button>
            </div>
          </div>
        </form>
      </div> -->
      <!-- col -->

      <div class="col-lg-5" style="margin-left: 150px">
        <h3>Contact Information</h3>
        <p><span class="icon icon-home"></span> <?php echo $contact['alamat']?><br/>
          <span class="icon icon-phone"></span> <?php echo $contact['telp']?> <br/>
          <span class="icon icon-mobile"></span> <?php echo $contact['hp']?> <br/>
          <span class="icon icon-envelop"></span> <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqWggHJlVrvLVvmmGxhclbbxQCkGPkcZghLDgtvXqfTmGSstJtdmczGcHgFlcJGVlPTqsq"> <?php echo $contact['email']?></a> <br/>
          <!-- <span class="icon icon-twitter"></span> <a href="#"> @TemplateMag </a> <br/>
          <span class="icon icon-facebook"></span> <a href="#"> TemplateMag </a> <br/> -->
        </p>
      </div>
      <!-- col -->

      <!-- <div class="col-lg-5">
        <h3>Contact Form</h3>
        <p>Register to our newsletter and be updated with the latests information.</p>
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>
      </div> -->
      <!-- col -->

    </div>
    <!-- row -->

  </div>
  <!-- container -->


<div id="copyrights" style="margin-top: 50px">
  <div class="container">
    <p>
      &copy; Copyrights <strong>Shield</strong>. All Rights Reserved
    </p>
    <div class="credits">
      <!--
        You are NOT allowed to delete the credit link to TemplateMag with free version.
        You can delete the credit link only if you bought the pro version.
        Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/shield-bootstrap-agency-template/
        Licensing information: https://templatemag.com/license/
      -->
      Created with Shield template by <a href="https://templatemag.com/">TemplateMag</a>
    </div>
  </div>
</div>
<!-- / copyrights -->

<!-- JavaScript Libraries -->
<script src="assets/lib/jquery/jquery.min.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/lib/php-mail-form/validate.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>

<!-- Template Main Javascript File -->
<script src="assets/js/main.js"></script>

</body>
</html>

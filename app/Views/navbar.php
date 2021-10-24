    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>funrun</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/navbar.css'); ?>">

<?php $session = session(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-navbar">
  <a class="nav-link nav-home" href="/Home">หน้าหลัก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <form class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php $checkname = $session->get('name');
        if(isset($checkname)) {?>
            <a class="nav-link" href="/result">ผลการลงทะเบียน</a>
            <a class="nav-link" href="/addregis">ลงทะเบียน</a>
        <?php }else { ?>
              <a class="nav-link" href="/login">ผลการลงทะเบียน</a>
              <a class="nav-link" href="/login">ลงทะเบียน</a>
        <?php } ?>
      </form>
    <form class="form-inline my-2 my-lg-0">
      <?php $checkname = $session->get('name');
      if(isset($checkname)) {?>
        <a href="/username" class="pr-4" style="color:black; text-decoration:none;"><?php echo $session->get('name')?></a>
        <a href="/Logout/logout" class="btn btn-outline-danger my-2 my-sm-0">ออกจากระบบ</a>
      <?php }else { ?>
        <a href="/login" class="btn btn-success my-2 my-sm-0 mr-3">เข้าสู่ระบบ</a>
        <a href="/register" class="btn btn-outline-primary my-2 my-sm-0">สมัครสมาชิก</a>
      <?php } ?>
    </form>
  </div>
</nav>
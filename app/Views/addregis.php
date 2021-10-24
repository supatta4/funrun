<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/navbar.css'); ?>">
</head>
<body>
<?php 
require('navbar.php'); ?>
<center><br><h2>ลงทะเบียนกิจกรรม</h2></center>
            <form action="/Addregis/regis" method="post">
              <div class="container mt-4">
                <div class="row justify-content-md-center">
                  <div class="col-md-6">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">หมายเลขบัตรประชาชน :</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?php echo $session->get('id_card');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">ชื่อ-นามสกุล :</label>
                        <input type="text" name="name" class="form-control" id="inputforcard" value="<?php echo $session->get('name');  ?>">
                    </div>
                    <div class="mb-3">
                    <label for="inputforcatogory">ประเภทกิจกรรม :</label> <br>
                    <select class="form-control" name="category" id="inputforcatogory">
                      <option value="1">Fun Run</option>
                      <option value="2">Mini Marathon</option>
                      <option value="3">VIP</option>
                      <option value="5">Super VIP</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <?php
                      $numItems = count($showregis);
                      $i = 0; 
                      if($numItems == 0){
                      ?>
                        <label for="inputid_card" class="form-label">หมายเลขที่ได้รับ : <strong>RUN1</strong></label>
                        <input type="hidden" name="ID" class="form-control" id="inputforID" value="1">
                      <?php
                      }else{
                      foreach($showregis as $key) {
                        if(++$i === $numItems) {
                        ?>
                        <label for="inputid_card" class="form-label">หมายเลขที่ได้รับ : <strong>RUN<?php echo $key['ID']+1 ?></strong></label>
                          <input type="hidden" name="ID" class="form-control" id="inputforID" value="<?php echo $key['ID']+1 ?>">
                        <?php
                        }}}
                      ?>
                    </div>
                    <br><br>
                    <center><button type="submit" class="btn btn-success" style="width:100px;">ยืนยัน</button>
                    <a href="/username" class="btn btn-danger me-1" style="width:100px;">ยกเลิก</a></center>
                  </div>
                </div>
              </div>
            </form>
             <?php require('footer.php'); ?>
</body>
</html>

           
<?php


include('header.php') ?>
<?php include('database.php') ?>
<?php

$query = $_GET['city'];
$sql = "SELECT * from rent WHERE location='$query'";
$result = mysqli_query($conn, $sql);
$vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
if ((isset($_POST['submit'])) && (!empty($_POST['duration'])) && (!empty($_POST['name'])) &&  (!empty($_POST['email'])) && (!empty($_POST['address'])) &&
  (!empty($_POST['description'])) && (!empty($_POST['phone']))
) {
  echo 'kok';
  try {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "solomonsanthosh2064@gmail.com";
    $mail->Password   = "wduehhqcrobapkov";
    $mail->IsHTML(true);
    $mail->AddAddress($email, $name);
    $mail->SetFrom("solomonsanthosh2064@gmail.com", "Rento");


    $mail->Subject = "Request for borrow";
    $format = sprintf('Name : %s, Phone : %s, Address: %s, Duration : %s, Description : %s', $name, $phone, $address, $duration, $description);

    $mail->MsgHTML($format);
    if (!$mail->Send()) {

      echo 'eerr';
    } else {
      header('Location:index.php');
    }
  } catch (Exception $e) {
    echo $e;
  }
} else {
  echo "fill the form";
}




?>




<div class="popup position-absolute w-100 h-100   justify-content-center align-items-center" style="top: 0;z-index: 100; background-color:#00000099;">
  <div class="w-50 bg-dark d-flex   justify-content-center   p-4" style="overflow: auto;max-height:80%;height:80%">
    <form action="<?php $_SERVER['PHP_SELF']  ?>" method="post" class="w-75 ">

      <div class="mb-4  w-100">
        <label for="name" class="form-label">
          <p>Name</p>
        </label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="mb-4  w-100">
        <label for="phone" class="form-label">
          <p>Phone</p>
        </label>
        <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter your number">
      </div>
      <div class="mb-4 w-100">
        <label for="email" class="form-label">
          <p>Email</p>
        </label>
        <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-4 w-100">
        <label for="duration" class="form-label">
          <p>Duration</p>
        </label>
        <input name="duration" type="text" class="form-control" id="duration" placeholder="Enter your period of buy">
      </div>

      <div class="mb-4 w-100">
        <label for="address" class="form-label">
          <p>Address</p>
        </label>
        <textarea class="form-control" name="address" id='address'></textarea>
      </div>
      <div class="mb-4 w-100">
        <label for="description" class="form-label">
          <p>Description</p>
        </label>
        <textarea class="form-control" name="description" id='description'></textarea>

      </div>
      <input class="fw-bold mb-3" style="background-color: transparent; border:none;color:white;" type="submit" value="Submit" name="submit">

    </form>
  </div>

</div>




<div class="w-75 mx-auto mt-5 ">
  <h1 class="fs-4 mb-4">Borrow a vehicle</h1>

  <div>
    <?php foreach ($vehicles as $vehicle) : ?>
      <div class="card mb-4" style="background-color: #2C3333;">
        <div class="card-header d-flex justify-content-between align-items-center">
          <p class="fs-5 fw-bold" style="color: #BFDB38;">
            <?php echo $vehicle['vehicle']  ?>
          </p>
          <button class="btn btn-success px-4 ">Buy</button>
        </div>
        <div class="card-body">
          <p class="fs-6" style="color: #03C988;">
            <?php echo $vehicle['name']  ?>
          </p>
          <p>
            <?php echo $vehicle['description']  ?>
          </p>
          <div class="d-flex">
            <p class=" fw-bold">Location :&nbsp </p>
            <p>

              <?php echo $vehicle['location']  ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</div>








<script src="borrow.js" type="text/javascript" />


<?php include('footer.php') ?>
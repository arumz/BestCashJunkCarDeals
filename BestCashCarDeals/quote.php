    <?php
    include("elements/header.php");
    ?>


    <div class="contact-clean" style="background-color:#609ee0;">
        <form method="post" id="frm" action="">
            <h2 class="text-center">Get a Quote</h2>

              <input class="form-control" type="text" name="name" placeholder="Name" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              <input class="form-control" type="email" name="email" placeholder="Email" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              <input class="form-control" type="tel" name="phone" placeholder="Phone Number" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              <input class="form-control" type="text" name="zip" placeholder="Zip Code of Vehicle Location" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              <input class="form-control" type="text" name="vehicle_year" placeholder="Vehicle Year" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              <input class="form-control" type="text" name="vehicle_model" placeholder="Vehicle Model" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              <input class="form-control" type="text" name="vehicle_make" placeholder="Vehicle Make" style="padding:14px;margin:0px;margin-right:25px;margin-bottom:30px;" required>
              **This needs to be a car that has a title**
            <div class="form-group"><textarea class="form-control" rows="14" name="message" placeholder="Message" required></textarea></div>
            <div class="form-group"><button class="btn btn-primary" name="send" type="submit">send </button></div>
        </form>
    </div>
<?php
if(isset($_POST["send"])){

    $headers = "MIME-Version: 1.0";
    $headers .= "Content-type:text/html;charset=UTF-8";
    $headers .="From: Walter@BestCashCarDeals.com";





    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $zip = $_POST["zip"];
    $vehicle_year = $_POST["vehicle_year"];
    $vehicle_model = $_POST["vehicle_model"];
    $vehicle_make = $_POST["vehicle_make"];
    $vehicle_message = $_POST["message"];
    $to = "BestcashCD2015@gmail.com";
    $subject = "Best Cash Car Deals New Car!";
    $message = "name: ".$name. "\r\n email: ".$email.  "\r\n phone number: " .$phone.  "\r\n zip code: ". $zip. "\r\n vehicle year: ".$vehicle_year. "\r\n vehicle model: " .$vehicle_model."\r\n vehicle make: ".$vehicle_make. "\r\n message: ".$vehicle_message;
    mail($to, $subject, $message, $headers);
}
include("elements/footer.php");
?>

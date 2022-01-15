<?php include 'header.php'; ?>

<!-- css -->
<link rel='stylesheet' type='text/css' media='screen' href='css/contact.css'>

<div class="container">
    <?php include 'sidebar.php'; ?>
    <div class="main">
        <div class="contact-form">
            <h1>Contact Me for Work/General Enquiries</h1>
            <form action="contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="fname">
                </div>
                <div class="mb-3">
                    <label for="mobileno" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobileno" name="mno">
                </div>
                <div class="mb-3">
                    <label for="clientEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="clientEmail" name="email">
                    <div id="emailHelp" class="form-text">
                        We'll never share your email & Mobile Number with
                        anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="enquiry" class="form-label">Your Enquiry</label>
                    <textarea class="form-control" id="enquiry" rows="5" name="msg"></textarea>
                </div>
                <div class="btns">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Backend -->
<?php 
    error_reporting(0);
  //creating connection to database
$con=mysqli_connect("localhost","root","","portfolio") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$id = $con->real_escape_string(($_GET['id']));
$fullName = $con->real_escape_string($_POST['fname']);
$mobileNo = $con->real_escape_string($_POST['mno']);
$emailId = $con->real_escape_string($_POST['email']);
$clientMsg = $con->real_escape_string($_POST['msg']);
  //query to insert the variable data into the database
$sql="INSERT INTO `clients_tbl`(`id`, `fullName`, `mobileNo`, `emailId`, `massage`) VALUES (Null,'$fullName','$mobileNo','$emailId','$clientMsg')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die("Error occured [' . $conn->error . ']");
}
else
   echo "<script>alert('Thanks for Visiting and For Contact Us.')</script>";
}
?>

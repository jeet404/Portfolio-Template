<?php include 'header.php'; ?>

<!-- css -->
<link rel='stylesheet' type='text/css' media='screen' href='css/contact.css'>

<div class="container">
    <?php include 'sidebar.php'; ?>
    <div class="main">
        <div class="contact-form">
            <h1>Contact Me for Work/General Enquiries</h1>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="mobileno" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobileno">
                </div>
                <div class="mb-3">
                    <label for="clientEmail" class="form-label">Email Address</label>
                    <input type="text" class="form-control" id="clientEmail">
                    <div id="emailHelp" class="form-text">
                        We'll never share your email & Mobile Number with
                        anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="enquiry" class="form-label">Your Enquiry</label>
                    <textarea class="form-control" id="enquiry" rows="5"></textarea>
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
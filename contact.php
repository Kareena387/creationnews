<?php
require_once "header.php";

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-success" >Send</button>
                </div>

            </form>
        </div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7064.951976014747!2d85.332733!3d27.702586297685613!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1693332393804!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</div>





<?php
require_once "footer.php";
?>
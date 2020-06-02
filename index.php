<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- google recaptcha api -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <form class="needs-validation" novalidate action="validate.php" method="POST">
                <div class="form-group">
                    <label for="Name">Full Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name"
                        required>
                    <div class="invalid-feedback">First Name is required</div>
                </div>
                <div class="form-group">
                    <label for="Mobile Number">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control form-control-sm" placeholder="Mobile"
                        required>
                    <div class="invalid-feedback">Mobile number is required</div>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
                    <div class="invalid-feedback">Email id is required and should be a valid email</div>
                </div>
                <div class="form-group">
                    <label for="Date of Birth">Date of Birth</label>
                    <input type="date" name="DOB" class="form-control form-control-sm" required>
                    <div class="invalid-feedback">Date of Birth is required</div>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Lcy-f0UAAAAAO0rNYH1IS9X77ossjukL0evxc_8"></div>
                    <?php
                    if (isset($_GET['captch_error'])) {
                        echo $_GET['captch_error'];
                    } ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>

</html>
<?php require ('database.php'); ?>

<?php
    $errors = [];
    $success = "";

    if( isset($_POST['username']) && isset($_POST['email'])  && 
        isset($_POST['password']) && isset($_POST['confirmPassword']) ){
            
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if( (strlen($name) > 0 && filter_var($email, FILTER_VALIDATE_EMAIL) && 
            strlen($password) >0 && strlen($confirmPassword) > 0) ){                
            if($password !== $confirmPassword){
                $errors['message'] = "Password and ConfirmPassword do not match!";
            }else{
                // REGISTER THE PROCESS
            }

        }else{
            $errors['message'] = "Errors in the Form!";
        }
    }
?>


<?php require ("htmlHeader.php"); ?>

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <form method="POST">

                    <div class="form-outline mb-4">
                    <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cg">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="confirmPassword" id="form3Example4cdg" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                    </div>

                    <div class="d-flex justify-content-center">
                    <button type="submit"
                        class="btn btn-primary btn-block btn-lg gradient-custom-4 text-white">Register</button>
                    </div>

                    <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login"
                        class="fw-bold text-body"><u>Login here</u></a></p>

                </form>
                <?php if(!empty($errors)) :?>
                    <div class="alert alert-danger mt-4 text-center bg-secondary">
                        <?= $errors['message'] ?>
                    </div>
                <?php endif; ?>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

<?php require ("htmlFooter.php");

// $row['password'] == $password
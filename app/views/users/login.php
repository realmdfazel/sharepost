<?php require_once APPROOT . '/views/inc/header.php';?>

    <section id="login-form" class="form-container col-md-6 mx-auto">
        <!-- __title__ -->
        <h3 class="display-4 mb-4 text-center">Login to your account</h3>

        <form action="<?php echo URLROOT; ?>/users/login" method="post">
        <!-- __email__username__ -->
            <div class="form-group">
                <input class="form-control <?php echo $data['email_err'] != '' ? 'is-invalid' : ''; ?>" name="email" type="text" placeholder="email or username...">
                <p class="invalid-feedback"><!-- We couldn't find an account with this email or username --><?php echo $data['email_err']; ?></p>
            </div>
            <!-- __password__ -->
            <div class="form-group">
                <input class="form-control <?php echo $data['password_err'] != '' ? 'is-invalid' : ''; ?>" name="password" type="password" placeholder="password...">
                <p class="invalid-feedback"><?php echo $data['password_err']; ?></p>
            </div>
            <!-- __buttons__ -->
            <input type="submit" class="btn btn-primary">
            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-link text-secondary">Create an account?!</a>

        </form>
    </section>

<?php include_once APPROOT . '/views/inc/footer.php';?>
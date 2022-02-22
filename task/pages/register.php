<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: action.php?pages=home');
}
?>

<?php include "pages/includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)){ ?>
                            <h5 class="text-success text-center">
                                <?php echo $message; ?>
                            </h5>
                        <?php } ?>
                        <div>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Phone Number</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="phone" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Address</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="address" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="reg_btn" value="Register" class="btn btn-outline-success btn-block " />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "pages/includes/footer.php"; ?>

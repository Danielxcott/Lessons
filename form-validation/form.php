<?php
session_start();
require_once "base.php";
require_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-4">
                <div class="my-5">
                    <div class="card">
                        <div class="card-body bg-black text-white rounded">
                            <div class="img">
                            <img src="./css/moon.svg" alt="">
                            </div>
                            <?php
                            if(isset($_POST['register'])){
                                register();
                            } ;
                            ?>
            
                            <form action="" method="post" enctype="multipart/form-data">
                                <h4>Register Form</h4>
                                <hr>
                                <!-- username start -->
                                <div class="form-group mb-4">
                                    <label for="name">Username</label>
                                    <input type="text" id="name"  name="name" class="form-control <?php echo getError('name')?"is-invalid":""?>" value="<?php 
                                        echo old('name')
                                    ?>">
                                    <?php if(getError('name')){ ?>
                                        <small class="text-danger"><?php echo getError('name') ?></small>
                                    <?php }?>
                                </div>
                                <!-- username end -->
                                <!-- email start-->
                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" id="email"  name="email" class="form-control <?php echo getError('email')?"is-invalid":""?>" value="<?php 
                                        echo old('email')
                                    ?>">
                                    <?php if(getError('email')){ ?>
                                        <small class="text-danger"><?php echo getError('email') ?></small>
                                    <?php }?>
                                </div>
                                <!-- email end-->
                                <!-- ph-num start -->
                                <div class="form-group mb-4">
                                    <label for="num">Phone</label>
                                    <input type="number" id="num"  name="phone" class="form-control <?php echo getError('phone')?"is-invalid":""?>" value="<?php 
                                        echo old('phone')
                                    ?>">
                                    <?php if(getError('phone')){ ?>
                                        <small class="text-danger"><?php echo getError('phone') ?></small>
                                    <?php }?>
                                </div>
                                <!-- ph-num end -->
                                <!-- File start -->
                                <div class="form-group mb-4" >
                                    <label for="image">Image</label>
                                    <input type="file" id="image"  name="image" class="p-1 form-control <?php echo getError('image')?"is-invalid":""?>" value="<?php 
                                        echo old('image')
                                    ?>">
                                    <?php if(getError('image')){ ?>
                                        <small class="text-danger"><?php echo getError('image') ?></small>
                                    <?php }?>
                                </div>
                                <!-- File end -->
                                 <!-- address start -->
                                 <div class="form-group mb-4">
                                    <label for="address">Address</label>
                                    <textarea type="text" id="address"  name="address" class="form-control <?php echo getError('address')?"is-invalid":""?>" ><?php 
                                        echo old('address')
                                    ?></textarea>
                                    <?php if(getError('address')){ ?>
                                        <small class="text-danger"><?php echo getError('address') ?></small>
                                    <?php }?>
                                </div>
                                 <!-- address end -->
                                 <!-- gender start -->
                                 <div class="form-group mb-4">
                                    <label >Gender</label>
                                    <div class="d-flex">
                                        <?php foreach($genderArr as $g){?>
                                            <div class="form-check">
                                            <label id="<?php echo $g ?>_id" class="form-check-label">
                                            <input type="radio"  class="form-check-input" name="gender" id="<?php echo $g ?>_id" <?php echo old("gender") === $g?"checked" :"" ?> value="<?php echo $g ?>">
                                            <?php echo $g ?>
                                            </label>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <?php if(getError('gender')){ ?>
                                        <small class="text-danger"><?php echo getError('gender') ?></small>
                                    <?php }?>
                                </div>
                                 <!-- gender end -->
                                 <!-- Skill start -->
                                 <div class="form-group mb-4">
                                    <label >Skills</label>
                                    <div class="d-flex flex-wrap">
                                        <?php foreach($skillArr as $s){?>
                                            <div class="form-check">
                                            <label id="<?php echo $s ?>_skill" class="form-check-label">
                                            <input type="checkbox"  
                                            class="form-check-input" 
                                            name="skill[]" 
                                            id="<?php echo $s ?>_skill" 
                                            value="<?php echo $s ?>"
                                            <?php if(old('skill')){
                                                echo in_array($s,old('skill'))?"checked":"";
                                            }
                                            ?>
                                            >
                                            <?php echo $s ?>
                                            </label>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <?php if(getError('skill')){ ?>
                                        <small class="text-danger"><?php echo getError('skill') ?></small>
                                    <?php }?>
                                </div>
                                 <!-- Skill end -->


                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required checked="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            get a promotion and details.
                                    </div>
                                    <button name="register" class="bg-primary text-white btn ">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php clearError() ?>
</html>
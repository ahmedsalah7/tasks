<?php
if (!empty($errorsProfile)) {

    echo ' <div class="alert alert-danger"> ';
    print_r($errorsProfile);
    echo '</div>';
} else {
    echo ' <div class="success alert-success"> ';
    print_r($updated);

    echo '</div>';
}
?>


<div>
    <section class="container profile">
        <div class="row" style="margin-top: 27px;">
            <div class="col-sm-12">
                <fieldset>
                    <legend><i class="fa fa-cogs fa-lg" aria-hidden="true"></i> Profile Sitting</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <form method="post" enctype="multipart/form-data">

                                <div class="col-xs-12 col-sm-4 col-lg-3 pull-right text-center photo-block">
                                    <img src="<?= base_url('assets/img/ribbon2.png'); ?>" alt="profil-img" class="img-responsive center-block ribbon2" />
                                    <img src="<?= base_url($user['profilePicture']); ?>" alt="profil-img" class="img-responsive center-block prof-pic" />
                                    <input type="file"  id="file" class="inputfile" name="pic" />
                                    <label for="file" class="btn btn-srch btn-profile"> <i class='fa fa-sliders' aria-hidden='true'></i> Change Your Picture</label>
                                </div>


                                <div class=" profile col-xs-12 col-sm-8 container-fluid">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail1">User Name</label><div class="clearfix"></div>
                                        <input readonly type="text" class="form-control col-xs-12 col-sm-8" placeholder="username" name="username" value="<?= $user['username'] ?>">
                                    </div>
                                    <div class="form-group row" >
                                        <label for="exampleInputEmail1">Email address</label><div class="clearfix"></div>
                                        <input readonly type="email" class="form-control" placeholder="Email" name="email" value="<?= $user['email'] ?>">
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword1">Password</label><div class="clearfix"></div>
                                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?= $user['password'] ?>">
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword1">Confirm-Password</label><div class="clearfix"></div>
                                        <input type="password" class="form-control" placeholder="Confirem Password" name="conpassword" value="<?= $user['password'] ?>">
                                    </div>
                                    <div class="form-group row" >
                                        <label for="exampleInputPassword1">Birth-Date</label><div class="clearfix"></div>
                                        <input   type="date" class="form-control" placeholder="birth-date" name="birth" value="<?= $user['birth'] ?>">
                                    </div>
                                    <div class="form-group row" >
                                        <label for="exampleInputPassword1">Phone Number</label><div class="clearfix"></div>
                                        <input   type="number" class="form-control" placeholder="Phone Number" name="phone" value="<?= $user['phone'] ?>">
                                    </div>
                                    <div class="form-group row" >
                                        <label for="exampleInputPassword1">Country</label><div class="clearfix"></div>
                                        <input   type="text" class="form-control" placeholder="Country" name="country" value="<?= $user['country'] ?>">
                                    </div>


                                    <div style="padding:30px 0px 10px 50px ; line-height:44px">
                                        <button type="submit" name="update" formaction="<?= base_url('Users/updateProfile'); ?>" value="" class="btn btn-srch btn-profile btn-profile-save"  style="margin-right:50px"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Save Sitting</button>
                                    </div>
                                </div>

                            </form> 

                        </div><!-- end of the row -->
                    </div><!-- end of the container -->
                </fieldset>
            </div><!-- end of the col-sm-12 -->
        </div><!-- end of the main row -->
    </section>
    <div class="row T-FOOTER text-center" style="position:static">
        <div id="T-a">
            <a href="#"><i class="fa fa-facebook fa-2x" id="T-i1"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x" id="T-i2"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-2x" id="T-i3"></i></a>
            <a href="#"><i class="fa fa-instagram fa-2x" id="T-i4"></i></a>
        </div>
        <span>&copy; All rights are resieved for TASKS 2016</span>
    </div>

</div>


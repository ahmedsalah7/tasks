<div class="wrapper" style="background-color: rgb(0, 111, 113); padding-bottom: 50px; ">
    <!-- <h1>Tasks</h1> -->

    <!--
    start errors section
    ===============================--> 
    <?php
    if (!empty($errors)) {
        echo '<div class="alert alert-danger" align="center" style="margin:auto">';
        print_r($errors);
        echo'</div>';
    }
    ?>
    <!--
    end errors section
    ===============================--> 
    <div class="container">
        <div class="row sign ">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <img src="<?= base_url('assets/img/ribbon.png'); ?>" alt="logo" style="margin-bottom: -18px; height: 165px;"
                     class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 img-responsive ribbon">
                <fieldset>

<!-- <?= lang('Sign_in'); ?> : -->
                    <legend></legend>
                    <!-- <h1>Tasks</h1> -->
                    <img src="<?= base_url('assets/img/tasktracker-logo.png'); ?>" alt="logo" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 img-responsive">

                    <form class="container-fluid sign-up" method="post" action="<?= base_url('users/addUser'); ?>">

                        <div class="form-group row">
                          <!-- <label for="inputEmail3" class="col-sm-3 col-form-label"><?= lang('Username'); ?></label> -->
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input  type="text" class="form-control" id="username1"
                                            name="username" placeholder="Username" autofocus
                                            value="<?php
                                            if (isset($invalidData)) {
                                                echo $invalidData['username'];
                                            }
                                            ?>"/>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">@</i></span>
                                    <input  type="text" class="form-control" id="email1" 
                                            name="email" placeholder="example@example.com"
                                            value="<?php
                                            if (isset($invalidData)) {
                                                echo $invalidData['email'];
                                            }
                                            ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                          <!-- <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Email'); ?></label> -->
                        </div>

                        <div class="form-group row">
                          <!-- <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Password'); ?></label> -->
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                    <input  type="password" class="form-control" id="password1"
                                            name="password" placeholder="<?= lang('Password'); ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                    <input  type="password" class="form-control" id="confirm_password"
                                            name="confirm_password" placeholder="<?= lang('Confirm_password'); ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                          <!-- <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Confirm_password'); ?></label> -->
                        </div>

                        <div class="form-group row">
                          <!-- <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Birth_Date'); ?></label> -->
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <input type="date" class="form-control" id="Birth" 
                                           name="birthdate" placeholder="<?= lang('Birth_Date'); ?>"
                                           value="<?php
                                           if (isset($invalidData)) {
                                               echo $invalidData['birthdate'];
                                           }
                                           ?>"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <input  type="number" class="form-control" id="Phone"
                                            name="phone" placeholder="0123456789"
                                            value="<?php
                                            if (isset($invalidData)) {
                                                echo $invalidData['phone'];
                                            }
                                            ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                          <!-- <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Phone_Number'); ?></label> -->
                        </div>

                        <div class="form-group row">
                          <!-- <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Country'); ?></label> -->
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" id="Country" 
                                           name="country" placeholder="Your Country"
                                           value="<?php
                                           if (isset($invalidData)) {
                                               echo $invalidData['country'];
                                           }
                                           ?>"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="agree"> 
                                        <?= lang('police'); ?> <br>
                                        <a href="#">our policies</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label class="col-sm-2">Checkbox</label> -->

                            <div class="col-sm-6">
                                <?php
                                print_r($cap['image']);
                                ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="captcha" class="form-control" placeholder="type this code Here..."/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button  name="submit" type="submit" value="login" class="btn btn-primary col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">Sign UP</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div> 


</div>
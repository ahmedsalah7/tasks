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
    <div class="row sign">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <img src="<?= base_url('assets/img/ribbon.png'); ?>" alt="logo" style="margin-bottom: -18px; height: 165px;"
             class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 img-responsive ribbon">
            <fieldset>
            
            <!-- <?= lang('Sign_in');?> : -->
                <legend></legend>
                <!-- <h1>Tasks</h1> -->
                <img src="<?= base_url('assets/img/tasktracker-logo.png'); ?>" alt="logo" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 img-responsive">

              <form class="container-fluid" method="post" action="<?= base_url('users/addUser'); ?>">

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"><?= lang('Username');?></label>
                  <div class="col-sm-10">
                    <input  type="text" class="form-control" id="username1"
                            name="username" placeholder="spiderman" autofocus
                            value="<?php
                            if (isset($invalidData)) {
                                echo $invalidData['username'];
                            }
                            ?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?= lang('Email');?></label>
                  <div class="col-sm-10">
                    <input  type="text" class="form-control" id="email1" 
                                        name="email" placeholder="example@example.com"
                                        value="<?php
                                        if (isset($invalidData)) {
                                            echo $invalidData['email'];
                                        }
                                        ?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?= lang('Password');?></label>
                  <div class="col-sm-10">
                      <input  type="password" class="form-control" id="password1"
                                            name="password" placeholder="<?= lang('Password');?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?= lang('Confirm_password');?></label>
                  <div class="col-sm-10">
                    <input  type="password" class="form-control" id="confirm_password"
                                     name="confirm_password" placeholder="<?= lang('Confirm_password');?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?= lang('Birth_Date');?></label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Birth" 
                                       name="birthdate" placeholder="<?= lang('Birth_Date');?>"
                                       value="<?php
                                       if (isset($invalidData)) {
                                           echo $invalidData['birthdate'];
                                       }
                                       ?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?= lang('Phone_Number');?></label>
                  <div class="col-sm-10">
                    <input  type="number" class="form-control" id="Phone"
                                        name="phone" placeholder="0123456789"
                                        value="<?php
                                        if (isset($invalidData)) {
                                            echo $invalidData['phone'];
                                        }
                                        ?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?= lang('Country');?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Country" 
                                       name="country" placeholder="England"
                                       value="<?php
                                       if (isset($invalidData)) {
                                           echo $invalidData['country'];
                                       }
                                       ?>"/>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2">Checkbox</label>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> <?= lang('police');?>
                      </label>
                    </div>
                  </div>
                </div>
                <?php
                print_r($cap['image']);
                ?>
                <input type="text" name="captcha" placeholder="<?= lang('type');?>"/>
                <div class="form-group row">
                    <button  name="submit" type="submit" value="login" class="btn btn-primary col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">Sign IN</button>
                </div>
              </form>
            </fieldset>
        </div>
    </div>
</div> 
<!-- <div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= lang('Sign_Up');?></h3>
                </div>
                <div class="panel-body">
                    <form id="signupForm1" class="form-horizontal" method="post" action="<?= base_url('users/addUser'); ?>">

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="username1"><?= lang('Username');?></label>
                            <div class="col-sm-5">
                                <input  type="text" class="form-control" id="username1"
                                        name="username" placeholder="<?= lang('Username');?>" autofocus
                                        value="<?php
                                        if (isset($invalidData)) {
                                            echo $invalidData['username'];
                                        }
                                        ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email1"><?= lang('Email');?></label>
                            <div class="col-sm-5">
                                <input  type="text" class="form-control" id="email1" 
                                        name="email" placeholder="<?= lang('Email');?>"
                                        value="<?php
                                        if (isset($invalidData)) {
                                            echo $invalidData['email'];
                                        }
                                        ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="password1"><?= lang('Password');?></label>
                            <div class="col-sm-5">
                                <input  type="password" class="form-control" id="password1"
                                        name="password" placeholder="<?= lang('Password');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="confirm_password"><?= lang('Confirm_password');?></label>
                            <div class="col-sm-5">
                                <input  type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="<?= lang('Confirm_password');?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="Birth"><?= lang('Birth_Date');?></label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="Birth" 
                                       name="birthdate" placeholder="<?= lang('Birth_Date');?>"
                                       value="<?php
                                       if (isset($invalidData)) {
                                           echo $invalidData['birthdate'];
                                       }
                                       ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="Phone"><?= lang('Phone_Number');?></label>
                            <div class="col-sm-5">
                                <input  type="number" class="form-control" id="Phone"
                                        name="phone" placeholder="<?= lang('Phone_Number');?>"
                                        value="<?php
                                        if (isset($invalidData)) {
                                            echo $invalidData['phone'];
                                        }
                                        ?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="Country"><?= lang('Country');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="Country" 
                                       name="country" placeholder="<?= lang('Country');?>"
                                       value="<?php
                                       if (isset($invalidData)) {
                                           echo $invalidData['country'];
                                       }
                                       ?>"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-5 col-sm-offset-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="agree1" name="agree" />
                                    <label> <?= lang('police');?></label>
                                </div>
                            </div>
                        </div>

                        <!--start capatcha--
                        <?php
                        print_r($cap['image']);
                        ?>
                        <input type="text" name="captcha" placeholder="<?= lang('type');?>"/>

                        <!--end capatcha--

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="signup">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>



            </div>

        </div>
    </div>
</div>-->

</div>
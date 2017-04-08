<style type="text/css">
    @media (max-width: 468px){
        .wrapper {
            /*position: static !important;*/
        }
    }
</style>
<div class="wrapper" style="background-color: rgb(0, 111, 113); width: 100%; height: 100vh;position: fixed">
<!-- rgba(47, 65, 84, 0.97); -->
 <!--
           start errors section
           ===============================-->
            <?php
            if (!empty($errorsSignIn or $errorsLogin)) {
                echo ' <div class="alert alert-danger" align="center" style="margin:auto"> ';
                if (!empty($errorsSignIn)) {
                    print_r($errorsSignIn);
                }
                if (!empty($errorsLogin)) {
                    print_r($errorsLogin);
                }
                echo '</div>';
            }
            ?>
            <!--
            end errors section
            ===============================--> 


    <div class="container">
        <div class="row sign">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <img src="<?= base_url('assets/img/ribbon.png'); ?>" alt="logo" style="height: 140px;width: 250px;margin: auto;margin-bottom: -16px;"
                 class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 img-responsive ribbon">
                <fieldset>
                
                <!-- <?= lang('Sign_in');?> : -->
                    <legend></legend>
                    <!-- <h1>Tasks</h1> -->
                    <img src="<?= base_url('assets/img/tasktracker-logo.png'); ?>" alt="logo" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 img-responsive">

                  <form class="container-fluid" method="post" action="<?= base_url('users/login'); ?>">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input name="email" type="text" class="form-control" 
                                   id="exampleInputEmail1" placeholder="example@example.com" autofocus
                                   value="<?php if (isset($invalidData)) {
                                    echo $invalidData['email'];
                                } ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label"><?= lang('Password');?></label>
                      <div class="col-sm-9">
                        <input  name="password" type="password" class="form-control"
                                    id="exampleInputPassword1" placeholder="<?= lang('Password');?>"
                                    value="<?php if (isset($invalidData)) {
                                        echo $invalidData['password'];
                                    } ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Checkbox</label>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> let me signin
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                        <button  name="submit" type="submit" value="login" class="btn btn-primary col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2">Sign IN</button>
                    </div>
                  </form>

                    <!-- <form class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3  col-md-12 col-md-offset-0" method="post" action="<?= base_url('users/login'); ?>">
                        <div class="form-group has-feedback">
                            <label for="exampleInputEmail1"><?= lang('email_address');?></label>
                            <input name="email" type="text" class="form-control" 
                                   id="exampleInputEmail1" placeholder="<?= lang('email_address');?>" autofocus
                                   value="<?php if (isset($invalidData)) {
                    echo $invalidData['email'];
                } ?>">
                        </div>
                        <div class="form-group">
                            <label ><?= lang('Password');?></label>
                            <input  name="password" type="password" class="form-control"
                                    id="exampleInputPassword1" placeholder="<?= lang('Password');?>"
                                    value="<?php if (isset($invalidData)) {
                    echo $invalidData['password'];
                } ?>">
                        </div>
                        <button  name="submit" type="submit" value="login" class="btn btn-primary col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3  col-md-12 col-md-offset-0">login</button>
                    </form> -->
                </fieldset>
            </div>
        </div>
    </div> 
</div>
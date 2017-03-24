
<div class="container">
    <div class="row sign">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>Tasks</h1>

            <!--
           start errors section
           ===============================-->
            <?php
            if (!empty($errorsSignIn or $errorsLogin)) {
                echo ' <div class="alert alert-danger"> ';
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
            <fieldset>
                <legend><?= lang('Sign_in');?> :</legend>
                <form method="post" action="<?= base_url('users/login'); ?>">
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
                    <button  name="submit" type="submit" value="login" class="btn btn-primary">login</button>
                </form>
            </fieldset>
        </div>
    </div>
</div> 

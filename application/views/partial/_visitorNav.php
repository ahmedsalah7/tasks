<nav class="navbar navbar-inverse nav-color navbar-fixed-top" id="T-N" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('users'); ?>">Tasks</a>

            <!-- <form name="lang" action=" <?= base_url('users/lang') ?>" method="POST">

                <button type="submit" class=""   name="ar">عربي</button>
                <button type="submit" class=""  name="en">english</button>
            </form>    --> 

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?= base_url('users/signIn'); ?>">Sign IN</a></li>
                <li><a href="<?= base_url('users/signUp'); ?>">Sign Up</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe fa-lg"></i></a>
                    <ul class="dropdown-menu">
                            <li>
                                <a href="#">English 
                                <form style="display: inline;" name="lang" action=" <?= base_url('users/lang') ?>" method="POST">
                                        <img src="<?= base_url('assets/img/english.jpg'); ?>" class="img-responsive" style="display:inline-block;width:50px; margin-left: 60px;">
                                        <button name="en" class="btn btn-default btn-sm" type="submit" style="position: absolute;left: 0px;width: 200px;height: 35px;opacity: 0;" align="right">
                                        </button>
                                </form>
                                </a> 
                            </li>
                            <li>
                                <a href="#">Arabic 
                                <form style="display: inline;" name="lang" action=" <?= base_url('users/lang') ?>" method="POST">
<img src="<?= base_url('assets/img/arabic.png'); ?>" class="img-responsive" style="display:inline-block;width:50px; margin-left: 65px;margin-right: 35px;">
<button name="ar" class="btn btn-default btn-sm" type="submit" style="position: absolute;left: 0px;width: 240px;height: 35px;opacity: 0;" align="right">
</button>
                                        <!-- <button name="ar" class="btn btn-default btn-sm" type="submit" style="width:50px; padding: 0px; margin-left: 106px;" align="right">
                                            <img src="<?= base_url('assets/img/arabic.png'); ?>" class="img-responsive">
                                        </button> -->
                                </form>
                                </a> 
                            </li>
                            <!-- <li><a href="#">Eslam has added new member</a></li> -->
                            <li role="separator" class="divider"></li>
                            <li><a href="#">See More ...</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
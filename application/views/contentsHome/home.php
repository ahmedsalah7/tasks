
<div id="carousel-example-generic" class="carousel slide carousel-1" data-ride="carousel" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active item-1 container-fluid">
            <div class="carousel-caption row">
                <img src="<?= base_url('assets/img/tasktracker-logo.png'); ?>" alt="logo" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3  col-md-4 col-md-offset-4 img-responsive">
                <h2 class="col-xs-12 col-md-8 col-md-offset-2"><?= lang('slider-description-1');?></h2>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3" >
                    <a  class="btn btn-lg" href="<?= base_url('users/signUp'); ?>">Sign Up</a>
                    <a  class="btn btn-lg" href="<?= base_url('users/signIn'); ?>">Sign In</a>
                </div>
            </div>
        </div>

        <div class="item item-1 item-2 container-fluid">
            <div class="carousel-caption row">
                <img src="<?= base_url('assets/img/manager.jpg'); ?>"alt="logo" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0  col-md-4 col-md-offset-2 img-responsive img-rounded">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <h2><?= lang('slider-title-2');?></h2>
                    <p class="lead"><?= lang('slider-description-2');?></p>
                </div>
            </div>
        </div>

        <div class="item item-1 item-2 container-fluid">
            <div class="carousel-caption row">
                <img src="<?= base_url('assets/img/goal-2.jpg'); ?>" alt="logo" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0  col-md-4 col-md-offset-2 img-responsive img-rounded">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <h2><?= lang('slider-title-2');?></h2>
                    <p class="lead"><?= lang('slider-description-3');?></p>
                </div>
            </div>
        </div>

        <div class="item item-1 item-2 container-fluid">
            <div class="carousel-caption row">
                <img src="<?= base_url('assets/img/slider/teamwork-2.jpg'); ?>" alt="logo" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0  col-md-4 col-md-offset-2 img-responsive img-rounded">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <h2><?= lang('slider-title-3');?></h2>
                    <p class="lead"><?= lang('slider-description-4');?></p>
                </div>
            </div>
        </div>

        <div class="item item-1 item-2 container-fluid">
            <div class="carousel-caption row">
                <img src="<?= base_url('assets/img/slider/contest-2.jpg'); ?>" alt="logo" class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0  col-md-4 col-md-offset-2 img-responsive img-rounded">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <h2><?= lang('slider-title-4');?></h2>
                    <p class="lead"><?= lang('slider-description-5');?></p>
                </div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" data-target="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" data-target="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--   *******************     second section    ************************  -->

<div class="container-fluid">

    <section class="home-one container-fluid" id="about">
        <h1><?= lang('services-title-0');?></h1>
        <h4>~~~~~~~ :: ~~~~~~~</h4>
        <p><?= lang('services-header');?></p>
        <div class="row">
            <div class="col-xs-6 col-sm-3">
                <i class="fa fa-lightbulb-o"></i>
                <h4 class="text-center"><?= lang('services-title-1');?></h4>
                <p><?= lang('services-description-1');?></p>
            </div>
            <div class="col-xs-6 col-sm-3">
                <i class="fa fa-pencil"></i>
                <h4 class="text-center"><?= lang('services-title-2');?></h4>
                <p><?= lang('services-description-2');?></p>
            </div>
            <div class="col-xs-6 col-sm-3">
                <i class="fa fa-cog"></i>
                <h4 class="text-center"><?= lang('services-title-3');?></h4>
                <p><?= lang('services-description-3');?></p>
            </div>
            <div class="col-xs-6 col-sm-3">
                <i class="fa fa-laptop"></i>
                <h4 class="text-center"><?= lang('services-title-4');?></h4>
                <p><?= lang('services-description-4');?></p>
            </div>
        </div>
    </section>

    <!--   *******************     third section    ************************  -->

    <section class="row home-two">
        <h1><?= lang('aboutUs-title-0');?></h1>
        <h4>~~~~~~ :: ~~~~~~</h4>
        <p><?= lang('aboutUs-header');?></p>
        <div>
            <i class="fa fa-globe"></i>
            <h4><?= lang('aboutUs-title-1');?></h4>
            <p><?= lang('aboutUs-description-1');?></p>
        </div>
        <div>
            <i class="fa fa-search"></i>
            <h4><?= lang('aboutUs-title-2');?></h4>
            <p><?= lang('aboutUs-description-2');?></p>
        </div><br>
        <div>
            <i class="fa fa-bell-o"></i>
            <h4><?= lang('aboutUs-title-3');?></h4>
            <p><?= lang('aboutUs-description-3');?></p>
        </div>
        <div>
            <i class="fa fa-bar-chart"></i>
            <h4><?= lang('aboutUs-title-4');?></h4>
            <p>onsectetur adipisicing elit, sedo <br>eiusmod tempor incidi<br>et dolorerserss eerhfre mag.</p>
        </div>
    </section>

    <!--   *******************     Fourth section    ************************  -->

    <div id="testimonial" class="carousel slide row carousel-2" data-ride="carousel" data-interval="2000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#testimonial" data-slide-to="0" class="active"><img src="<?= base_url('assets/img/avatar-1.png'); ?>" alt="pic-1" class="img-responsive img-circle"></li>
            <li data-target="#testimonial" data-slide-to="1"><img src="<?= base_url('assets/img/avatar-2.png'); ?>" alt="pic-2" class="img-responsive img-circle"></li>
            <li data-target="#testimonial" data-slide-to="2"><img src="<?= base_url('assets/img/avatar-3.png'); ?>" alt="pic-3" class="img-responsive img-circle"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active container-fluid item-1">
                <div class="carousel-caption row">
                    <h2 class="col-sm-8 col-sm-offset-2"><i class="fa fa-quote-left" aria-hidden="true"></i> <?= lang('testimonial-name-1');?><i class="fa fa-quote-right" aria-hidden="true"></i></h2>
                    <p class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 lead">
                    <?= lang('testimonial-opinion-1');?></p>
                </div>
            </div>
            <div class="item  container-fluid item-1">
                <div class="carousel-caption row">
                    <h2 class="col-sm-8 col-sm-offset-2"><i class="fa fa-quote-left" aria-hidden="true"></i><?= lang('testimonial-name-2');?><i class="fa fa-quote-right" aria-hidden="true"></i></h2>
                    <p class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 lead">
                    <?= lang('testimonial-opinion-2');?></p>
                </div>
            </div>
            <div class="item container-fluid item-1">
                <div class="carousel-caption row">
                    <h2 class="col-sm-8 col-sm-offset-2"><i class="fa fa-quote-left" aria-hidden="true"></i><?= lang('testimonial-name-3');?><i class="fa fa-quote-right" aria-hidden="true"></i></h2>
                    <p class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 lead">
                    <?= lang('testimonial-opinion-3');?></p>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" data-target="#testimonial" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" data-target="#testimonial" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--   *******************     Contact us section    ************************  -->
    <section id="contactme" class="home-contact row">
        <h1 id="ID"> <?= lang('contactMe-title');?></h1>
        <h4>~~~~~~ :: ~~~~~~</h4>
        <p>
 <?= lang('contactMe-description');?>

 </p>
        <form action="#" method="get">

            <input type="text" name="NAME" placeholder="<?= lang('contactMe-formName');?>">
            <input type="text" name="EMAIL ADDRESS" placeholder="<?= lang('contactMe-formEmail');?>">
            <label><?= lang('contactMe-formMassage');?></label>
            <textarea></textarea>
            <input type="submit" value="<?= lang('contactMe-formsubmit');?>">

        </form>
        <div class="col-xs-12">
            <div id="T-a">
                <a href="#"><i class="fa fa-facebook fa-2x" id="T-i1"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x" id="T-i2"></i></a>
                <a href="#"><i class="fa fa-google-plus fa-2x" id="T-i3"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x" id="T-i4"></i></a>
            </div>
            <span><?= lang('copyright');?></span>
        </div>
    </section>




    <!--<div class="row T-FOOTER text-center">
      <div id="T-a">
        <a href="#"><i class="fa fa-facebook fa-2x" id="T-i1"></i></a>
        <a href="#"><i class="fa fa-twitter fa-2x" id="T-i2"></i></a>
        <a href="#"><i class="fa fa-google-plus fa-2x" id="T-i3"></i></a>
        <a href="#"><i class="fa fa-instagram fa-2x" id="T-i4"></i></a>
      </div>
      <span>&copy; All rights are resieved for TASKS 2016</span>
    </div>-->

</div><!--  end of the container  -->
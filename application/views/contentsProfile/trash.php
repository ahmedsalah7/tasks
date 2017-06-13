
<h1 style="color: grey; margin-bottom: 40px; border-bottom: 2px solid #b5b5b5; padding-bottom: 21px;">&#x2326; Tasks you have Deleted...</h1>
<div class="row">
    
    <?php if (is_array($cards) || is_object($cards)) { ?>
        <?php  foreach ($cards as $card) { ?>

    <div class=" col-xs-12 col-sm-6 col-md-3" >
        <!-- <button type="button" class="btn" data-toggle="modal" data-target="#myModal"> -->
        <div class="thumbnail">
            <img src="<?= base_url('assets/img/logo.jpg'); ?>" alt="img" style="float:left">
            <div class="clearfix"></div>
            <img src="<?= base_url($this->session->userdata['userData']['profilePicture']); ?>" alt="img" class="img-circle pull-right admin-img">
            <div class="caption">
                <h3><?php print_r($card['title']); ?></h3>
                <p>
                <?= $this->session->userdata['userData']['username'] ?>  <span class="pull-right">Due Date</span> <br/>
                     <span class="pull-right"><?php print_r($card['date']); ?></span><br>
                </p>
                <p><a href="<?= base_url('task/moveDone/' .$card['id'] );?>" class="btn btn-srch" role="button">to Done</a> 
                    <a href="<?= base_url('task/remove/' .$card['id'] );?>" class="btn btn-trash" role="button">Remove</a></p>
            </div>
        </div>
        <!-- </button> -->
    </div>
    <?php }} else{    ?>
    <div>
    <h1 style="color: grey; margin-left:40px;     padding-bottom: 21px;"> Trash is empty !!</h1>
</div>
    <?php }?>
</div>
<style type="text/css">
    .slider.slider-horizontal {
        width:100%;
    }
</style>

<script type="text/javascript">
    function range() {
        var x = document.getElementById("myRange").value;
        document.getElementById("demo").innerHTML = x + '%';
    }
</script>


<h1 style="color: grey; margin-bottom: 40px; border-bottom: 2px solid #b5b5b5; padding-bottom: 21px;"><i class="fa fa-tasks" aria-hidden="true"></i> Tasks you must Finish...</h1>


<div class="row">
    <div href="#" data-toggle="modal" data-target="#createCard" class="create col-xs-12 col-sm-6 col-md-3 text-center">
        <i class="fa fa-plus fa-3x" aria-hidden="true"></i>
        <h4 style="font-weight: bold;">Create new Card</h4>
    </div>

    <!--start cards -->
    <?php if (is_array($cards) || is_object($cards)) { ?>

        <?php foreach ($cards as $card) { ?>

            <div class=" col-xs-12 col-sm-6 col-md-3" >
                <div class="thumbnail">
                    <img src="<?= base_url('assets/img/logo.jpg'); ?>" alt="img" data-toggle="modal" data-target="<?= '#updateModal' . $card['id']; ?>" class="img-card"/>
                    <div class="clearfix"></div>
                    <img src="<?= base_url($this->session->userdata['userData']['profilePicture']); ?>" alt="img" class="img-circle pull-right admin-img">
                    <div class="caption">
                        <h3><?php print_r($card['title']); ?></h3>
                        <p>
                            <?= $this->session->userdata['userData']['username'] ?>    <span class="pull-right">Due Date</span> <br/>
                            <span class="pull-right"><?php print_r($card['date']); ?></span><br>
                        </p>
                        <p>
                            <a href="<?= base_url('task/moveDone/' . $card['id']); ?>" class="btn btn-srch" role="button">Done</a>
                            <a href="<?= base_url('task/moveTrash/' . $card['id']); ?>" class="btn btn-trash" role="button">in trash</a></p>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
        <div class=" col-xs-12 col-sm-6  col-md-9 text-center">
            <h1 style="color: grey; margin-left:40px;     padding-bottom: 21px;"> Must Do is empty !!</h1>
        </div>
    <?php } ?>
</div>

<!--end cards -->


<!-- Modal create card -->
<div class="modal fade" id="createCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="createCard">
            <form name="newCart" action="<?= base_url('task/addCart') ?>" method="POST" enctype="multipart/form-data">
                <!--start from here to send date through form--> 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: xx-large;"><span aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-sm-3"><h4 style="margin-top : 20px;" class="modal-title" id="myModalLabel">Create new Card</h4></div>
                        <div class="col-sm-4"><input type="text" name="title" class="form-control" placeholder="name of card"></div>
                    </div>
                </div>
                <div class="modal-body" style="color: white; background-image: linear-gradient(to top, #2f4154 0%, #1abc9c 100%); background-attachment: fixed; background-repeat: no-repeat;">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-sm-3"><h3 style="margin-top:5px;">Due Date</h3></div>
                                <div class="col-sm-9 input-group" >
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    <input type="date" name="mydate" class="form-control" >
                                </div>
                            </div>
                            <h3>Description <small style="color: bisque;">general</small></h3>
                            <div class="well well-lg" style=" background-image: linear-gradient(-225deg, #1abc9c 50%, #2f4154 50%);">
                                <div class="main">
                                    <!-- <a href="#" class="btn btn-prima pull-right edit">edit</a>  -->
                                    <h4>Main</h4>
                                    <div class="form-group">
                                        <textarea required name="desc" class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>

                                <h4>Illustrating Images</h4>
                                <!-- <form action="" method="" > -->
                                <div class="input-group space" style="margin: 0px auto;">
                                    <input id="file-upload" type="file" name="image" class="input-hidden" aria-label="...">
                                    <label for="file-upload" class="form-control drag-drop-label">
                                        Select a Image to Upload
                                        <br />OR
                                        <br />Drag a Image into this box
                                        <br />Allow [ jpg ,  png ] onlly !!

                                        <br /><br /><span id="file-upload-btn" class="button">Add a Image</span>
                                    </label>
                                </div>


                            </div><!--  end of well-one -->


                        </div><!-- end of col-9 -->

                    </div><!-- end of the second row -->
                </div><!-- end of model-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--- end of modal create card -->



<!-- Modal update card -->
<?php
if (is_array($cards) || is_object($cards)) {

    foreach ($cards as $card) {
        ?>

        <div class="modal fade" id="<?= 'updateModal' . $card['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" id="createCard">
                    <form name="newCart" action="<?= base_url('task/updateCard/') . $card['id'] ?>" method="POST" enctype="multipart/form-data">
                        <!--start from here to send date through form--> 
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: xx-large;"><span aria-hidden="true">&times;</span></button>
                            <div class="row">
                                <div class="col-sm-3"><h4 style="margin-top : 20px;" class="modal-title" id="myModalLabel"> Card Title</h4></div>
                                <div class="col-sm-4"><input type="text" name="title" class="form-control" value="<?= $card['title']; ?>" ></div>

                            </div>
                        </div>
                        <div class="modal-body" style="color:white; background-image: linear-gradient(to top, #2f4154 0%, #1abc9c 100%); background-attachment: fixed; background-repeat: no-repeat;">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-sm-3"><h3 style="margin-top:5px;">Due Date</h3></div>
                                        <div class="col-sm-9 input-group" >
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <input type="date" name="date" class="form-control"  value="<?= $card['date'] ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"><h3 style="margin-top:5px;">Task Progress</h3></div>
                                        <div class="col-sm-9" >
                                            <input name="Frange" data-slider-value="<?= $card['Frange']; ?>"  id="range-<?= $card['id'] ?>" type="text" data-slider-ticks="[0, 25, 50, 75, 100]" data-slider-ticks-snap-bounds="50" data-slider-ticks-labels='["0%", "25%", "50%", "75%", "100%"]' ticks_positions="[0, 25, 50, 75, 100]" />
                                        </div>
                                    </div> 
                                    <h3>Description <small style="color: bisque;">general</small></h3>
                                    <div class="well well-lg" style="background-image: linear-gradient(-120deg, #1abc9c 50%, #2f4154 50%);">
                                        <div class="main">
                                            <!-- <a href="#" class="btn btn-prima pull-right edit">edit</a>  -->
                                            <h4>Main</h4>
                                            <div class="form-group">
                                                <textarea required name="Description" class="form-control" rows="5" id="comment"><?= $card['Description']; ?></textarea>
                                            </div>
                                        </div>

                                        <h4>Illustrating Images</h4>
                                        <!-- <form action="" method="" > -->
                                        <div class="input-group space">
                                            <div class="row">
                                                <div class="col-xs-12"> <img style="width:100%; height: 100%; margin-top: 30px;" src="<?= base_url($card['image']); ?>"/></div> 
                                            </div>
                                        </div>
                                    </div><!--  end of well-one -->

                                </div><!-- end of col-9 -->

                            </div><!-- end of the second row -->
                        </div><!-- end of model-body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <?php
    }
}
//print_r($cards);
?>
<!-- end of modal update card -->


<script>

    var cards = <?php echo json_encode($cards) ?>;

    for (i = 0; i < cards.length; i++) {
        $("#range-" + cards[i]['id']).slider({
            ticks: [0, 25, 50, 75, 100],
            min: 1000,
            max: 10000000,
            scale: 'logarithmic',
            step: 10
        });
    }
</script>

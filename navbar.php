<?php
/**
 * Created by PhpStorm.
 * User: Trung
 * Date: 6/26/2017
 * Time: 6:49 PM
 */
?>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>-->
            <li><button class="btn btn-info btn-lg" data-toggle="modal" data-target="#MyModal">Upload</button></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<!-- Modal -->
<div id="MyModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="button-form icon-box-choose_file">
                            <div class="icon"></div>
                            <div class="icon-box-text">Choose File</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="button-form icon-box-image_url">
                            <div class="icon"></div>
                            <div class="icon-box-text">Image Url</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="button-form icon-box-video_url">
                            <div class="icon"></div>
                            <div class="icon-box-text">Video Url</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="button-form icon-box-make_meme">
                            <div class="icon"></div>
                            <div class="icon-box-text">Make meme</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

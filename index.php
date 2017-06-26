<!--CSS-->
<link rel="stylesheet" href="assets/app.css">

<link rel="stylesheet" href="assets/bootstrap.min.css">
<!--jquery-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<?php require('navbar.php') ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="list_gag">
                <?php
                $articles_json = file_get_contents('media-items.json');
                $articles = json_decode($articles_json);
                foreach ($articles as $ariticle) {
                    echo "<div class='gag-item'>";
                    echo "<h4 class='gag-title'>{$ariticle->title}</h4>";
                    if ($ariticle->type === 'image'){
                        echo "<div class='media-content'><img src='{$ariticle->media_source}'></div>";
                    }
                    /*end media-content*/
                    echo "<div class='count'>
<span class='comments'>
<a href='#'>1,300 Comment</a>
.</span>
<span class='points'>
<a href='#'>100 Points</a>
</span>
</div>
<div class='action'>
<div class='action-left pull-left'>
<div class='btn btn-default btn-like'>
<span class='glyphicon glyphicon-chevron-up'></span>
</div>
<div class='btn btn-default btl-unlike'>
<span class='glyphicon glyphicon-chevron-down'></span>
</div>
<div class='btn btn-default btn-comment'>
<span class='glyphicon glyphicon-comment'></span>
</div>
</div>
<!--end pull-left-->
<div class='action-right pull-right'>
<span class='btn btn-facebook'>facebook</span>
<span class='btn btn-twitter'>twitter</span>
</div>
<div style='clear:both'></div>
<!--end pull-right-->
</div>
<div style='clear:both'></div>
";
                    echo "
<hr>
</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

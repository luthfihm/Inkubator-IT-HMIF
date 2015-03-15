<?php 
    $home_link = base_url();
    $portofolio_link = base_url('portfolio');
    $article_link = base_url('article');
    $about_link = base_url('about');
    $cyber_link = base_url('community/cyber');
    $game_link = base_url('community/game');
    $mobile_link = base_url('community/mobile');
    $web_link = base_url('community/web');
    if ($incl == "home"){
        $img_header = "whatsnew.png";
        $header_link = $home_link;
        $head_title = "Inkubator IT";
    }else if ($incl == "portfolio"){
        $img_header = "portfolio.png";
        $header_link = $portofolio_link;
        $head_title = "Inkubator IT | Portfolio";
    }else if (($incl == "article")||($incl=="post")){
        $img_header = "articles.png";
        $header_link = $article_link;
        if ($incl == "article"){
            $head_title = "Inkubator IT | Articles";
        }else{
            $head_title = "Inkubator IT | ".$artikel->row()->title;
        }
    }else if ($incl == "about"){
        $img_header = "aboutus.png";
        $header_link = $about_link;
        $head_title = "Inkubator IT | About Us";
    }else if ($incl == "cyber"){
        $img_header = "cyber_header.png";
        $header_link = $cyber_link;
        $head_title = "Inkubator IT | Komunitas Cyber";
    }else if ($incl == "game"){
        $img_header = "game_header.png";
        $header_link = $game_link;
        $head_title = "Inkubator IT | Komunitas Game";
    }else if ($incl == "mobile"){
        $img_header = "mobile_header.png";
        $header_link = $mobile_link;
        $head_title = "Inkubator IT | Komunitas Mobile";
    }else if ($incl == "web"){
        $img_header = "web_header.png";
        $header_link = $web_link;
        $head_title = "Inkubator IT | Komunitas Web";
    }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $head_title; ?></title>
    <link rel="icon" href="<?php echo base_url('img/logo-iit.png'); ?>">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles.css'); ?>">
    <script src="<?php echo base_url('jquery-2.0.3.min.js'); ?>" type="text/javascript" ></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript" ></script>
</head>
<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <nav class="navbar navbar-inverse navbar-fixed-top visible-xs visible-sm" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Inkubator IT</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar">
                    <li class="<?php if ($incl=="home") echo "active"; ?>"><a href="<?php echo $home_link; ?>" >Home</a></li>
                    <li class="<?php if ($incl=="portfolio") echo "active"; ?>"><a href="<?php echo $portofolio_link; ?>" >Portofolio</a></li>
                    <li class="<?php if (($incl=="article")||($incl=="post")) echo "active"; ?>"><a href="<?php echo $article_link; ?>" >Articles</a></li>
                    <li class="<?php if ($incl=="about") echo "active"; ?>"><a href="<?php echo $about_link; ?>" >About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="visible-xs visible-sm" style="height:70px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="sidebar" align="center">
                    <div class="hidden-xs hidden-sm" style="height:40px;"></div>
                    <div id="logo" align="center"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('img/logo-iit.png'); ?>"></a></div>
                    <div id="community" align="center">
                        <div class="row">
                            <div class="col-xs-3"><a href="<?php echo $cyber_link; ?>" title="Komunitas Cyber"><img src="<?php echo base_url('img/cyber.png'); ?>"></a></div>
                            <div class="col-xs-3"><a href="<?php echo $game_link; ?>" title="Komunitas Game"><img src="<?php echo base_url('img/game.png'); ?>"></a></div>
                            <div class="col-xs-3"><a href="<?php echo $mobile_link; ?>" title="Komunitas Mobile"><img src="<?php echo base_url('img/mobile.png'); ?>"></a></div>
                            <div class="col-xs-3"><a href="<?php echo $web_link; ?>" title="Komunitas Web"><img src="<?php echo base_url('img/web.png'); ?>"></a></div>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm" id="nav" align="right">
                        <ul id="navigationMenu">
                            <li><a class="home" href="<?php echo $home_link; ?>"><span>Home</span></a></li>
                            <li><a class="portfolio" href="<?php echo $portofolio_link; ?>"><span>Portfolio</span></a></li>
                            <li><a class="articles" href="<?php echo $article_link; ?>"><span>Articles</span></a></li>
                            <li><a class="aboutus" href="<?php echo $about_link; ?>"><span>About Us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="row hidden-xs hidden-sm">
                    <div class="col-md-12" id="header" align="right">
                        <a href="<?php echo $header_link; ?>"><img src="<?php echo base_url('img/'.$img_header); ?>"></a>
                    </div>
                </div>
                <div id="wrapper">
                    <div class="row visible-xs visible-sm">
                        <div class="col-md-12" id="header" align="center">
                            <a href="<?php echo $header_link; ?>"><img src="<?php echo base_url('img/'.$img_header); ?>"></a>
                        </div>
                    </div>
                    <div id="inner-wrap">
                        <?php $this->load->view($incl); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-lg-offset-3 col-md-4 col-lg-4" id="twiiter_follow">
                <a href="https://twitter.com/inkubatorIT" class="twitter-follow-button" data-show-count="false">Follow @inkubatorIT</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <div class="col-md-4 col-lg-5" id="footer">
                <a href="http://www.itb.ac.id" title="Institut Teknologi Bandung Site" target="_blank"><img src="<?php echo base_url('img/logo-itb.png'); ?>" height="70px"></a>
                <a href="http://hmif.itb.ac.id" title="HMIF ITB Site" target="_blank"><img src="<?php echo base_url('img/logo-hmif.jpg'); ?>" height="70px" style="margin-left:10px;"></a>
            </div>
        </div>
    </div>
</body>
</html>

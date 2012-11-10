<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
    echo $this->Layout->meta();
    echo $this->Layout->feed();
?>
    <!-- CSS
  ================================================== -->
<?php
        echo $this->Html->css(array(
            'base',
            'skeleton',
            'layout'
        ));
?>


    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

</head>
<body>

    <div class="page">

        <div class="band header">
    
            <header class="container main">
        
                <div class="sixteen columns">
                
                    <h1 class="logo"><a href=""><?php echo Configure::read('Site.title'); ?></h1>
                    
                    <!--http://themeforest.net/wiki/referral/basics-referral/banners-and-logos/-->
                    <a class="banner" href="#"> <?php echo $this->Html->image("banners/pd_468x60_v4.gif"); ?></a>
                
                </div>
                
            </header><!--end container-->
            
        </div><!--end band-->   
        
        <div class="band navigation">
    
            <nav class="container primary">
        
                <div class="sixteen columns">
                    <?php echo $this->Custom->menu('main', array('dropdown' => true)); ?>
                </div>
                
            </nav><!--end container-->
            
        </div><!--end band-->   
        
            <div class="band chief">
        
                <div class="container">
            
                    <div class="sixteen columns">
                        
                        <div class="flexslider">
                        
                            <ul class="slides">
                            
                                <li>
                                    <figure>
                                        <?php echo $this->Html->image("loch-nevis.jpg"); ?>
                                    </figure>
                                </li>
                            
                                <li>
                                    <figure>
                                        <?php echo $this->Html->image("iceland.jpg"); ?>
                                    </figure>
                                </li>
                            
                                <li>
                                    <figure>
                                        <?php echo $this->Html->image("snow.jpg"); ?>
                                    </figure>
                                </li>
                            
                            </ul><!--end slides-->
                        
                        </div><!--end flexslider-->             
                    
                    </div>
                        
                    <div class="ten columns">
                        <?php
                            echo $this->Layout->sessionFlash();
                            echo $content_for_layout;
                        ?>
                    
                        <article>
                        
                            <div class="ten columns alpha thumbnail">
                                <h2>The Evolving Role of Social Media</h2>
                            
                                <figure>
                                
                                    <?php echo $this->Html->image("iceland.jpg"); ?>
                                
                                </figure>

                            
                            </div><!--three-->  
                        
                            <div class="seven columns omega">
                            
                                <p class="breadcrumbs"><a href="#">Breadcrumb</a> &gt; <a href="#">trail</a></p>
                                
                                <p class="meta">Posted by <a href="#">Charlie</a> 1 hour ago <a href="#">30 comments</a></p>
                                
                                <p>A few years ago, news organizations were unsure about social. Journalists were apprehensive to create Twitter accounts and media companies questioned whether a branded Facebook fan page was necessary.</p>
                                                    
                            </div><!--seven-->  
                            
                            <hr />          
                        
                        </article><!--blog post-->
                    
                        
                    

                
                        
                        <nav class="pagination">
                        
                            <ul>
                            
                                <li><a class="selected" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                            
                            </ul>
                        
                        </nav><!--end pagination-->                                             
                    
                    </div><!--end ten-->            
            
                    <aside class="six columns">

                        <?php echo $this->Layout->blocks('right'); ?>
                        
                        <div class="sub subscribe clearfix">


                        
                            <header>
                            
                                <h4>Subscribe</h4>
                            
                            </header>
                            
                            <div class="three columns alpha">
                            
                                <span class="icon rss">r</span>
                                
                                <p><em>18,857</em><br />
                                subscribers</p>
                            
                            </div><!--end alpha-->
                            
                            <div class="three columns omega">
                            
                                <span class="icon twitter">t</span>
                                
                                <p><em>13,756</em><br />
                                followers</p>
                            
                            </div><!--end omega-->
                        
                        </div><!--end sub subscribe-->  
                        
                    
                        
                        <div class="sub sponsors clearfix">
                        
                            <header>
                            
                                <h4>Sponsors</h4>
                            
                            </header>
                            
                            <!--http://themeforest.net/wiki/referral/basics-referral/banners-and-logos/-->
                            <a class="mini" href="#"><?php echo $this->Html->image("banners/cc_260x120_v4.gif"); ?></a>
                            <a class="mini" href="#"><?php echo $this->Html->image("banners/pd_260x120_v4.gif"); ?></a>
                            <a class="mini" href="#"><?php echo $this->Html->image("banners/tf_260x120_v2.gif"); ?></a>
                            <a class="mini" href="#"><?php echo $this->Html->image("banners/vh_260x120_v1.gif"); ?></a>
                            
                            <a class="maxi" href="#"><?php echo $this->Html->image("banners/gr_300x250_v3.gif"); ?><</a>
                            <a class="maxi" href="#"><?php echo $this->Html->image("banners/vh_260x120_v1.gif"); ?></a>
                        </div><!--end sub sponsors-->   
                                        
                        <div class="sub popular">
                        
                            <header>
                            
                                <h4>Most Popular</h4>
                            
                            </header>
                            
                            <ul class="tabs">                   
                                <li><a class="active" href="#popular">Popular</a></li>
                                <li><a class="" href="#recent">Recent</a></li>
                                <li><a class="" href="#tags">Tags</a></li>                  
                            </ul>
                            
                            <ul class="tabs-content">
                                <li class="active" id="popular">The tabs are clean and simple unordered-list markup and basic CSS.</li>
                                <li id="recent">The tabs are cross-browser, but don't need a ton of hacky CSS or markup.</li>
                                <li id="tags">The tabs work like a charm even on mobile devices.</li>
                            </ul>
                                                                
                        </div><!--end sub popular-->    
                        
                        <div class="sub news">
                        
                            <header>
                            
                                <h4>Magazine News</h4>
                            
                            </header>
                            
                            <form class="subscribe clearfix">
                            
                                <input type="email" placeholder="you@domain" value="">
                                
                                <button type="submit">Subscribe</button>
                            
                            </form><!--end search-->
                                                                
                        </div><!--end sub news-->
                        
                        <div class="sub categories clearfix">
                        
                            <header>
                            
                                <h4>Categories</h4>
                            
                            </header>
                            
                            <div class="three columns alpha">
                            
                                <ul class="categories">
                                
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">YouTube</a></li>
                                
                                </ul><!--end cats-->
                            
                            </div><!--end alpha-->
                            
                            <div class="three columns omega">
                            
                                <ul class="categories">
                                
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Write for us</a></li>
                                
                                </ul><!--end cats-->
                            
                            </div><!--end omega-->
                                                                
                        </div><!--end sub cats-->   
                        
                        <div class="sub video">
                        
                            <header>
                            
                                <h4>Video of the Week</h4>
                            
                            </header>
                            
                            <figure>
                            
                                <div class="embed">
                                <!--
                                <iframe src="http://player.vimeo.com/video/22679618" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>                    
                                -->
                                </div><!--end embed-->
                                
                                <figcaption>
                                
                                    <a href="http://vimeo.com/22679618">Apache</a> from <a href="http://vimeo.com/oneedo">oneedo</a>
                                
                                </figcaption>
                            
                            </figure>
                                                                                    
                        </div><!--end sub video-->              
                    
                    </aside><!--end six-->
                    
                </div><!--end container-->
                
            </div><!--end band-->   
        
        <div class="band footer">   
        
            <footer class="container main">
            
                <div class="four columns">
                
                    <h3 class="logo"><a href="#">Magazine</a></h3>
                
                    <p>Magazine was founded in 2012. </p>
    
                    <p>Magazine is a full service Web Design, Marketing and Advertising Company geared to help small to medium size businesses create a plan to succeed. Form Graphics, Print (Display ad, brochures, etc.), Internet research & Marketing and Web Site Design and Development, Magazine can do it all for you.</p>
                    
                    <p>Our mission is to serve our clients big or small with the same passion, integrity, loyalty and effectiveness</p>
                    
                </div><!--end four-->
            
                <div class="four columns">
                        
                    <header>
                        <h4>Twitter</h4>
                    </header>
                    
                    <div class="tweet"></div>
                    
                </div><!--end four-->
            
                <div class="four columns">
                        
                    <header>
                        <h4>Recent Posts</h4>
                    </header>
                        
                    <ul>
                    
                        <li>TVGuide.com Watchlist Predicts Fall TV Shows Success</li>               
                        <li>7 Ways to Create a Memorable Customer Experience With Social</li>               
                        <li>Apple Gives Its Key Execs $400 Million in Bonuses</li>              
                        <li>How 5 Tech Giants Are Giving Back to Education</li>                     
                    
                    </ul>
                        
                </div><!--end four-->
            
                <div class="four columns">
                        
                    <header>
                        <h4>Flickr</h4>
                    </header>
                    
                    <div class="flickr"></div>  
                        
                </div><!--end four-->           
        
            </footer><!-- container -->
        
        </div><!--end band-->
        
        <div class="band bottom">   
        
            <footer class="container">      
            
                <div class="eight columns first-credit">
                    <p>Copyright &copy; 2012 <a href="#">Magazine</a> All Rights Reserved.</p>
                </div><!--end eight-->
            
                <div class="eight columns last-credit">
                    <p>Powered by Webdesigntuts+ - Designed &amp; Developed By <a href="#">Mahdi El Hanafi</a>.</p>     
                </div><!--end eight-->
        
            </footer><!-- container -->
        
        </div><!--end band-->

    </div><!--end page-->   


    <!-- JS
    ================================================== -->

<?php 
        echo $this->Layout->js();
        echo $this->Html->script(array(
            'jquery',
            'jquery.flexslider',
            'jquery.flickrush',
            'jquery.tweet',
            'tabs',
            'whatever'
            
        ));
        echo $scripts_for_layout;
?>
    


<!-- End Document
================================================== -->
</body>
</html>
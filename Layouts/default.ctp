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
<?php
    echo $this->Html->meta('icon');
?>

</head>
<body>

    <div class="page">

        <div class="band header">
    
            <header class="container main">
        
                <div class="sixteen columns">
                
                    <h1 class="title"><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?>
                        <br><small><?php echo Configure::read('Site.tagline'); ?></small></h1>
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
            
<?php /*
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

 */?>                       
                    <div class="ten columns">
                        <?php
                            echo $this->Layout->sessionFlash();
                            echo $content_for_layout;
                        ?>
                    
                        <!--
                        <article>
                        
                            <div class="ten columns alpha thumbnail">
                                <h2>The Evolving Role of Social Media</h2>
                            
                                <figure>
                                
                                    <?php echo $this->Html->image("iceland.jpg"); ?>
                                
                                </figure>

                            
                            </div> 
                        
                            <div class="seven columns omega">
                            
                                <p class="breadcrumbs"><a href="#">Breadcrumb</a> &gt; <a href="#">trail</a></p>
                                
                                <p class="meta">Posted by <a href="#">Charlie</a> 1 hour ago <a href="#">30 comments</a></p>
                                
                                <p>A few years ago, news organizations were unsure about social. Journalists were apprehensive to create Twitter accounts and media companies questioned whether a branded Facebook fan page was necessary.</p>
                                                    
                            </div> 
                            
                            <hr />          
                        
                        </article>
                        -->
                        <!--
                        <nav class="pagination">
                        
                            <ul>
                            
                                <li><a class="selected" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                            
                            </ul>
                        
                        </nav>
                        --> 
                    
                                                                
                    
                    </div><!--end ten-->            
            
                    <aside id="right_col" class="six columns">

                        <?php echo $this->Custom->blocks('right'); ?>
<!--                    
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
                                                                
                        </div>
-->          
                    
                    </aside><!--end six-->
                    
                </div><!--end container-->
                
            </div><!--end band-->   
        
        <div class="band footer">   
        
            <footer class="container main">

                <?php echo $this->Custom->blocks('footer'); ?>
                <!--
                <div class="four columns">
                
                    <h3 class="logo"><a href="#">Magazine</a></h3>
                
                    <p>Magazine was founded in 2012. </p>
    
                    <p>Magazine is a full service Web Design, Marketing and Advertising Company geared to help small to medium size businesses create a plan to succeed. Form Graphics, Print (Display ad, brochures, etc.), Internet research & Marketing and Web Site Design and Development, Magazine can do it all for you.</p>
                    
                    <p>Our mission is to serve our clients big or small with the same passion, integrity, loyalty and effectiveness</p>
                    
                </div>
                -->
                
                <div class="four columns">
                        
                    <header>
                        <h4>Twitter</h4>
                    </header>
                    
                    <div class="tweet"></div>
                    
                </div>
                
            
               
        
            </footer><!-- container -->
        
        </div><!--end band-->
        
        <div class="band bottom">   
        
            <footer class="container">      
            
                <div class="eight columns first-credit">
                    <p>Copyright &copy; 2012 <a href="#"><?php echo Configure::read('Site.title'); ?></a> All Rights Reserved.</p>
                </div><!--end eight-->
            
                <div class="eight columns last-credit">
                    <p></p>     
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $title_for_layout . ' | ' . Configure::read('Site.title'); ?></title>
        <?php 
            echo $this->Layout->meta();
            echo $this->Layout->feed();
            echo $this->Html->css(array('theme'));
            echo $this->Layout->js();
            echo $scripts_for_layout;
        ?>
    </head>

    <body>
        <div id="nav">
            <?php echo $this->Layout->menu('main'); ?>
        </div>

        <div id="content">
            <?php echo $content_for_layout; ?>
        </div>

        <div id="sidebar">
            <?php echo $this->Layout->blocks('right'); ?>
        </div>
    </body>
</html>
<?php
$b = $block['Block'];
$class = 'block block-' . $b['alias'];
if ($block['Block']['class'] != null) {
    $class .= ' ' . $b['class'];
}
?>
<div id="block-<?php echo $b['id']; ?>" class="sub search <?php echo $class; ?>">
<?php if ($b['show_title'] == 1) { ?>
    <header>
        <h4><?php echo $b['title']; ?></h4>
    </header>
<?php } ?>
                        

                            
                            <form id="searchform" method="post" class="search clearfix" action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI($('#searchform #q').val());">
                            
                                <input type="search" placeholder="eg: Beer" value="">
                                
                                <?php
                                echo $this->Form->button('Search', array('type' => 'submit', 'class' => 'btn btn-info'));
                                ?>
                            
                            </form><!--end search-->
                        
                        </div><!--end sub search--> 

<div id="block-<?php echo $b['id']; ?>" class=" text-center">

    <div class="block-body">
        <form class="well form-search"   action="">
            <div class="input-append input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <?php
                $qValue = null;
                if (isset($this->params['named']['q'])) {
                    $qValue = $this->params['named']['q'];
                }
                echo $this->Form->input('q', array(
                    'label' => false,
                    'name' => 'q',
                    'value' => $qValue,
                    'class' => '',
                    'div' => false,
                ));
                ?>


            </div>
        </form>
    </div>
</div>

<div>
    <?php
    if (count($nodes) == 0) {
        __('No items found.');
    } else {
        foreach ($this->params['named'] AS $nn => $nv) {
            $this->Paginator->options['url'][$nn] = $nv;
        }
    }
    ?>

    <?php
    foreach ($nodes AS $node) { $this->Layout->setNode($node); ?>

    <article id="node-<?php echo $this->Layout->node('id'); ?>" class="node node-type-<?php echo $this->Layout->node('type'); ?>">
    
        <div class="ten columns alpha thumbnail">
            <h2><?php echo $this->Html->link($this->Layout->node('title'), $this->Layout->node('url')); ?></h2>
            <!--<figure>Photo will be here </figure>-->
        </div><!--three-->  
    
        <div class="ten columns alpha">
            <?php echo $this->Layout->nodeInfo(); ?>
    
            <?php
            if($this->Layout->nodeExcerpt() !== '' && $this->Layout->nodeExcerpt() !=='<div class="node-excerpt"></div>'){
                echo $this->Layout->nodeExcerpt();
            }
            else{
                echo $this->Layout->nodeBody();
            }
            ?>
            <?php
            echo $this->Layout->nodeMoreInfo();
            ?>
                                
        </div><!--seven--> 
        
        <hr />          
    
    </article><!--blog post-->

        <?php } ?>

    <div class="paging"><?php echo $this->Paginator->numbers(); ?></div>
</div>
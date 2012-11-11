<?php
	$this->set(compact('block'));
	$b = $block['Block'];
	$class = 'block block-' . $b['alias'];
	if ($block['Block']['class'] != null) {
		$class .= ' ' . $b['class'];
	}
?>
<div id="block-<?php echo $b['id']; ?>" class="sub <?php echo $class; ?> clearfix">
<?php if ($b['show_title'] == 1) { ?>
    <header>
        <h4><?php echo $b['title']; ?></h4>
    </header>
    <?php echo $this->Layout->filter($b['body']); ?>
<?php } ?>

            
</div>


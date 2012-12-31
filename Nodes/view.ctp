<div>
	<?php $this->Layout->setNode($node); ?>
	<article id="node-<?php echo $this->Layout->node('id'); ?>" class="node node-type-<?php echo $this->Layout->node('type'); ?>">
		<div class="ten columns alpha thumbnail">
			<h1><?php echo $this->Html->link($this->Layout->node('title'), $this->Layout->node('url')); ?> 
				
			</h1>
			<small><?php echo $this->Layout->nodeInfo(); ?></small>
			<hr/>
			<?php echo $this->Layout->nodeBody(); ?>
			<hr/>
		    <?php echo $this->Layout->nodeMoreInfo(); ?><br/>
	    </div>
	</article>

	<div id="comments" class="node-comments">
	<?php
		$type = $types_for_layout[$this->Layout->node('type')];

		if ($type['Type']['comment_status'] > 0 && $this->Layout->node('comment_status') > 0) {
			echo $this->element('comments');
		}

		if ($type['Type']['comment_status'] == 2 && $this->Layout->node('comment_status') == 2) {
			echo $this->element('comments_form');
		}
	?>
	</div>
</div>
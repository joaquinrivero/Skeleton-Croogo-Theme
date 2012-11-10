<div id="vocabulary-<?php echo $vocabulary['Vocabulary']['id']; ?>" class="vocabulary">
<?php
	echo $this->Custom->nestedTerms($vocabulary['threaded'], $options);
?>
</div>
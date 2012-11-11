<div id="node-list-<?php echo $alias; ?>" class="node-list">
	<?php
		$terms = $nodesList;
		$total = count($terms);
	    $rest = $total % 2;
	    $output = '';
	    $left_list = '';
	    $right_list = '';
	    $array_counter = 0;

	    if($rest === 0){

	        $left_list_total = $total / 2;
	        $right_list_total = $total / 2;

	    } else {

	        $left_list_total =  round($total / 2) - 1;
	        $right_list_total =  $total - 1;

	    }

           // Left

            for ($i = 0; $i <= $left_list_total; $i++) {

                if ($options['link']) {

                    $termOutput_left = $this->Html->link($terms[$i]['Node']['title'], array(
						'plugin' => $options['plugin'],
						'controller' => $options['controller'],
						'action' => $options['action'],
						'type' => $terms[$i]['Node']['type'],
						'slug' => $terms[$i]['Node']['slug'],
                        ));

                }

                else {
                    $termOutput_left = $terms[$i]['Node']['title'];
                }
                /*
                if (isset($terms[$i]['children']) && count($terms[$i]['children']) > 0) {
                    $termOutput .= $this->Custom->nestedTerms($terms[$i]['children'], $options, $depth + 1);
                }
                */
                $termOutput_left = $this->Html->tag('li', $termOutput_left);
                $left_list .= $termOutput_left;

                $array_counter++;
            }

            if ($left_list != null) {
                $left_list = $this->Html->tag('ul', $left_list);
                $left_list = $this->Html->tag('div', $left_list, array('class' => 'three columns alpha',));
            }


            // Right

            for ($i = $array_counter; $i <= $right_list_total; $i++) {

                if ($options['link']) {

                    $termOutput_right = $this->Html->link($terms[$i]['Node']['title'], array(
						'plugin' => $options['plugin'],
						'controller' => $options['controller'],
						'action' => $options['action'],
						'type' => $terms[$i]['Node']['type'],
						'slug' => $terms[$i]['Node']['slug'],
                        ));

                }

                else {
                    $termOutput_right = $terms[$i]['Node']['title'];
                }
                /*
                if (isset($terms[$i]['children']) && count($terms[$i]['children']) > 0) {
                    $termOutput .= $this->Custom->nestedTerms($terms[$i]['children'], $options, $depth + 1);
                }
                */
                $termOutput_right = $this->Html->tag('li', $termOutput_right);
                $right_list .= $termOutput_right;

                $array_counter++;
            }

            if ($right_list != null) {
                $right_list = $this->Html->tag('ul', $right_list);
                $right_list = $this->Html->tag('div', $right_list, array('class' => 'three columns alpha',));
            }

        $output = $left_list . $right_list;

        echo $output;
	?>

</div>
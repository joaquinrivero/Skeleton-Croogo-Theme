<?php
/**
 * Custom Helper
 *
 *
 * @category Helper
 * @package  Croogo
 * @version  1.0
 * @author   Nitish Dhar (@nitishdhar)
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class CustomHelper extends Helper {

    /**
     * Other helpers used by this helper
     *
     * @var array
     * @access public
     */
    public $helpers = array(
        'Html',
        'Form',
        'Session',
        'Js',
        'Layout',
    );



    public function menu($menuAlias, $options = array()) {
        $_options = array(
            'tag' => 'ul',
            'tagAttributes' => array(),
            'selected' => 'active',
            'dropdown' => false,
            'dropdownClass' => 'dropdown',
            'dropdownMenuClass' => 'dropdown-menu',
            'toggle' => 'dropdown-toggle',
            'menuClass' => 'nav nav-pills',
            'element' => 'menu',
        );
        $options = array_merge($_options, $options);

        if (!isset($this->_View->viewVars['menus_for_layout'][$menuAlias])) {
            return false;
        }
        $menu = $this->_View->viewVars['menus_for_layout'][$menuAlias];
        $output = $this->_View->element($options['element'], array(
            'menu' => $menu,
            'options' => $options,
                ));
        return $output;
    }


/**
 * Region is empty
 *
 * returns true if Region has no Blocks.
 *
 * @param string $regionAlias Region alias
 * @return boolean
 */
    public function regionIsEmpty($regionAlias) {
        if (isset($this->_View->viewVars['blocks_for_layout'][$regionAlias]) &&
            count($this->_View->viewVars['blocks_for_layout'][$regionAlias]) > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function wtf() {
        $croogo = array();
        if (isset($this->params['locale'])) {
            $croogo['basePath'] = Router::url('/' . $this->params['locale'] . '/');
        } else {
            $croogo['basePath'] = Router::url('/');
        }
        $croogo['params'] = array(
            'controller' => $this->params['controller'],
            'action' => $this->params['action'],
            'named' => $this->params['named'],
        );
        if (is_array(Configure::read('Js'))) {
            $croogo = Set::merge($croogo, Configure::read('Js'));
        }
        return $this->Html->scriptBlock('var Croogo = ' . $this->Js->object($croogo) . ';');
    }

/**
 * Show Blocks for a particular Region
 *
 * @param string $regionAlias Region alias
 * @param array $options
 * @return string
 */
    public function blocks($regionAlias, $options = array()) {
        $_options = array();
        $options = array_merge($_options, $options);
        $region_alias = array('region_alias' => $regionAlias );
        
        $output = '';
        if (!$this->regionIsEmpty($regionAlias)) {
            $blocks = $this->_View->viewVars['blocks_for_layout'][$regionAlias];
            foreach ($blocks as $block) {
                $block = array_merge($region_alias, $block);
                $plugin = false;

                if ($block['Block']['element'] != null) {
                    if (strstr($block['Block']['element'], '.')) {
                        $pluginElement = explode('.', $block['Block']['element']);
                        $plugin  = $pluginElement[0];
                        $element = $pluginElement[1];
                    } else {
                        $element = $block['Block']['element'];
                    }
                } else {
                    $element = 'block';
                }
                if ($plugin) {
                    $blockOutput = $this->_View->element($element, array('block' => $block), array('plugin' => $plugin));
                } else {
                    $blockOutput = $this->_View->element($element, array('block' => $block));
                }
                $enclosure = isset($block['Params']['enclosure']) ? $block['Params']['enclosure'] === "true" : true;
                if ($element != 'block' && $enclosure) {
                    $block['Block']['body'] = $blockOutput;
                    $block['Block']['element'] = null;
                    $output .= $this->_View->element('block', array('block' => $block));
                } else {
                    $output .= $blockOutput;
                }
            }
        }

        return $output;
    }

/**
 * Nested Terms
 *
 * @param array   $terms
 * @param array   $options
 * @param integer $depth
 */
    public function nestedTerms($terms, $options, $depth = 1) {
        $_options = array();
        $options = array_merge($_options, $options);

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

                    $termAttr_left = array(
                        'id' => 'term-' . $terms[$i]['Term']['id'],
                    );

                    $termOutput_left = $this->Html->link($terms[$i]['Term']['title'], array(
                        'plugin' => $options['plugin'],
                        'controller' => $options['controller'],
                        'action' => $options['action'],
                        'type' => $options['type'],
                        'slug' => $terms[$i]['Term']['slug'],
                        ), $termAttr_left);

                }

                else {
                    $termOutput_left = $terms[$i]['Term']['title'];
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
                $left_list = $this->Html->tag('ul', $left_list, $options['tagAttributes']);
                $left_list = $this->Html->tag('div', $left_list, array('class' => 'three columns alpha',));
            }


            // Right

            for ($i = $array_counter; $i <= $right_list_total; $i++) {

                if ($options['link']) {

                    $termAttr_right = array(
                        'id' => 'term-' . $terms[$i]['Term']['id'],
                    );

                    $termOutput_right = $this->Html->link($terms[$i]['Term']['title'], array(
                        'plugin' => $options['plugin'],
                        'controller' => $options['controller'],
                        'action' => $options['action'],
                        'type' => $options['type'],
                        'slug' => $terms[$i]['Term']['slug'],
                        ), $termAttr_right);

                }

                else {
                    $termOutput_right = $terms[$i]['Term']['title'];
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
                $right_list = $this->Html->tag('ul', $right_list, $options['tagAttributes']);
                $right_list = $this->Html->tag('div', $right_list, array('class' => 'three columns alpha',));
            }

        $output = $left_list . $right_list;
        
        return $output;
    }


    /**
     * Nested Links
     *
     * @param array $links model output (threaded)
     * @param array $options (optional)
     * @param integer $depth depth level
     * @return string
     */
    public function nestedLinks($links, $options = array(), $depth = 1) {
        $_options = array();
        $options = array_merge($_options, $options);

        $output = '';
        foreach ($links AS $link) {
            $linkAttr = array(
                'id' => 'link-' . $link['Link']['id'],
                'rel' => $link['Link']['rel'],
                'target' => $link['Link']['target'],
                'title' => $link['Link']['description'],
                'class' => $link['Link']['class'],
                'toggle' => $link['Link']['class']
            );

            foreach ($linkAttr AS $attrKey => $attrValue) {
                if ($attrValue == null) {
                    unset($linkAttr[$attrKey]);
                }
            }

            // if link is in the format: controller:contacts/action:view
            if (strstr($link['Link']['link'], 'controller:')) {
                $link['Link']['link'] = $this->Layout->linkStringToArray($link['Link']['link']);
            }

            // Remove locale part before comparing links
            if (!empty($this->params['locale'])) {
                $currentUrl = substr($this->_View->request->url, strlen($this->params['locale']));
            } else {
                $currentUrl = $this->_View->request->url;
            }

            if (Router::url($link['Link']['link']) == Router::url('/' . $currentUrl)) {
                if (!isset($linkAttr['class'])) {
                    $linkAttr['class'] = '';
                }
                $linkAttr['class'] .= ' ' . $options['selected'];
            }

            $linkOutput = $this->Html->link($link['Link']['title'], $link['Link']['link']);
            if (isset($link['children']) && count($link['children']) > 0) {
                $linkOutput = $this->Html->link($link['Link']['title'] . '<b class="caret"></b>', $link['Link']['link'], array('class' => '', 'data-toggle' => '', 'escape' => false));
                $linkAttr['class'] .= ' ' . $options['dropdownClass'];
                $linkOutput .= $this->nestedLinks($link['children'], $options, $depth + 1);
            }
            $linkOutput = $this->Html->tag('li', $linkOutput, $linkAttr);
            $output .= "\n". $linkOutput;
        }
        if ($output != null) {
            $tagAttr = $options['tagAttributes'];
            if ($options['dropdown'] && $depth == 1) {
                $tagAttr['class'] = $options['menuClass'];
            }
            if ($depth > 1) {
                $tagAttr['class'] = '';
            }
            $output = $this->Html->tag($options['tag'], $output, $tagAttr);
            $output = $output."\n";
        }

        return $output;
    }

}
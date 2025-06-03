<?php
class Custom_Menu_Walker extends Walker_Nav_Menu {
    private $subs = array();
    function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '<div class="mega-menu-wrapper"><div class="mega-menu">';
        }
        if($depth === 1){
            $output .= '<ul class="depth-'.$depth.'">';
        }
        
    }

    function end_lvl(&$output, $depth = 0, $args = null) {

        if ($depth === 0 ) {
            $output .= '</div></div>';
        }
        if ($depth === 1){
            $output .= '</ul>';
        }
        
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            $output.= "<li class='depth-".$depth."'>";
            $output.= "<a href=''>asdada</a>";
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
            $output.= "</li>";
    }
}
?>

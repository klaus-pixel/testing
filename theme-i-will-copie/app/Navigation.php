<?php

class Navigation {



    /**
     * Get all menu items
     * @return array|false
     */
    public function getAllItems()
    {
        if(pll_current_language() == 'dk'){
            return wp_get_nav_menu_items('primary-menu');
        }else if(pll_current_language() == 'eng'){
            return wp_get_nav_menu_items('primary-menu ENG');
        }else{
            return wp_get_nav_menu_items('primary-menu SE');
        }
    }

    /**
     * Return array of children objects
     * @param $parent_id integer menu id
     * @return array
     */
    public function hasChildren($parent_id)
    {
        $nav_menu_children_list = [];

        foreach ($this->getAllItems() as $item){
            if($item->menu_item_parent == $parent_id){
                $nav_menu_children_list[] = $item;
            }
        }

        return $nav_menu_children_list;
    }

}
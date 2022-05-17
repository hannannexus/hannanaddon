
<?php 

/*
    Plugin Name: Hannan Addons
    Description: Simple Addons for all users
    Plugin URI: hannan.me
    Author: Hannan
    Author URI: hannan.me
    Version: 1.0
    Text Domain: hannanaddons
    
*/

 /* Add new Column for product table */

 function custom_add_new_column($new_column){
    $new_column["new_column"] = "New Column";
    return $new_column;
 }
  add_filter('wpto_default_column_arr','custom_add_new_column',10,1);
 
  /* add item for new column*/ 
    function add_new_item_new_column($file){
 
       $file = __DIR__ .'/items/new_column.php';
 
       return $file;
 
    }
  add_filter('wpto_template_loc_item_new_column','add_new_item_new_column');




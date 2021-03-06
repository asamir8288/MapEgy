<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template 
| group to make active.  By default there is only one group (the 
| "default" group).
|
*/
$template['active_template'] = 'default';

/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land. 
|   You may also include default markup, wrappers and attributes here 
|   (though not recommended). Region keys must be translatable into variables 
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We 
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the 
|   wrapper. (We recommend doing this in your template file.)
|
| Example:
| $template['default']['regions'] = array(
|    'header' => array(
|       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
|       'name' => 'Page Header',
|       'wrapper' => '<div>',
|       'attributes' => array('id' => 'header', 'class' => 'clearfix')
|    )
| );
|
*/

/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/

$template['default']['template'] = 'frontend/templates/template';
$template['default']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE;

/*
 * Home Template
 */
$template['home_template']['template'] = 'frontend/templates/home_template';
$template['home_template']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['home_template']['parser'] = 'parser';
$template['home_template']['parser_method'] = 'parse';
$template['home_template']['parse_template'] = FALSE;

/*
 * Product Template
 */
$template['product_template']['template'] = 'frontend/templates/product_template';
$template['product_template']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['product_template']['parser'] = 'parser';
$template['product_template']['parser_method'] = 'parse';
$template['product_template']['parse_template'] = FALSE;

// Admin Template
$template['admin']['template'] = 'backend/template';
$template['admin']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['admin']['parser'] = 'parser';
$template['admin']['parser_method'] = 'parse';
$template['admin']['parse_template'] = FALSE;

/*
 * Mobile Version
 */
$template['mobile']['template'] = 'mobile/template';
$template['mobile']['regions'] = array(
   'header',
   'content',
   'footer',
);
$template['mobile']['parser'] = 'parser';
$template['mobile']['parser_method'] = 'parse';
$template['mobile']['parse_template'] = FALSE;
/* End of file template.php */
/* Location: ./system/application/config/template.php */
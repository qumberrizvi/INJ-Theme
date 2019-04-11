<?php

/**
 * InJob functions and definitions
 *
 * @package injob
 */
/* Theme option framework */
require_once get_template_directory() . '/framework/theme-option.php';
require_once get_template_directory() . '/framework/option-framework/inof.php';

/* Require helper function */
require_once get_template_directory() . '/framework/inc/helper.php';

/* Require importer function */
require_once get_template_directory() . '/framework/importer/importer.php';

/* Custom nav */
require_once get_template_directory() . '/framework/inc/custom-nav.php';

/* Customizer theme */
require_once get_template_directory() . '/framework/inc/customizer.php';

/* Require custom widgets */
require_once get_template_directory() . '/framework/widgets/info-footer.php';
require_once get_template_directory() . '/framework/widgets/subscribe.php';
require_once get_template_directory() . '/framework/widgets/recent-comment.php';
require_once get_template_directory() . '/framework/widgets/recent-post.php';

/* TGM plugin activation. */
require_once get_template_directory() . '/framework/inc/class-tgm-plugin-activation.php';

/* Plugins */
require_once get_template_directory() . '/framework/theme-plugin-load.php';

/* Theme Options */
require_once get_template_directory() . '/framework/theme-function.php';

/* Post, page metabox */
require_once get_template_directory() . '/framework/theme-metabox.php';

/* Theme Register */
require_once get_template_directory() . '/framework/theme-register.php';

/* Theme Support */
require_once get_template_directory() . '/framework/theme-support.php';

/* Theme enqueue_scripts */
require_once get_template_directory() . '/framework/theme-style-script.php';

/*Your Name in registeration*/
add_action('iwj_register_process', function($uid){
    $user = IWJ_User::get_user($uid);
    $post_id = 0;
    if($user->is_employer()){
        $emp = $user->get_employer();
        $post_id = $emp->get_id();
    }
    if($user->is_candidate()){
        $cand = $user->get_candidate();
        $post_id = $cand->get_id();
    }
    
    if($post_id){
        //Also need check your custom field isset, should like this:if($post_id && isset($_POST['_iwj_phone'])){
        //Add you custom field name process here
        //Ex:
        update_post_meta($post_id, 'your_name', sanitize_text_field($_POST['your_name']));
    }
});
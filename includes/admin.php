<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function metabox_vue_js_admin_product(){
  add_meta_box( 'quizbook_examen_meta_box', 'Example Metabox Vue Js', 'content_metabox_admin_vue', 'product', 'normal', 'high', null );
}

add_action( 'add_meta_boxes', 'metabox_vue_js_admin_product' );

function content_metabox_admin_vue($post){
  wp_enqueue_script( 'vue-admin-example' );
  echo '<div class="vue-components-admin"></div>';
}

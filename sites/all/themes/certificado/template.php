<?php

function ruidoculto_preprocess_html(&$vars) {
    $viewport = array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
        ),
    );

    drupal_add_html_head($viewport, 'viewport');
}

function certificado_preprocess_views_view_table(&$vars) {
  $vars['classes_array'][] = 'table table-striped';
}
<?php 
/**
 * Implementation of hook_panels_layout()
 */
function ypptheme_rightthreecolflex_panels_layouts() {
  $items['rightthreecolflex'] = array(
    'title' => t('Right sidebar, flexible middle three columns'),
    'icon' => 'rightthreecolflex.png',
    'theme' => 'rightthreecolflex',
    'css' => 'rightthreecolflex.css',
    'panels' => array(
      'right' => t('Right sidebar'),
      'main_row1' => t('Middle row 1'),
      'main_left_row2' => t('Middle left row 2'),
      'main_center_row2' => t('Middle center row 2'),
      'main_right_row2' => t('Middle right row 2'),
      'main_row3' => t('Middle row 3'),
      'main_left_row4' => t('Middle left row 4'),
      'main_center_row4' => t('Middle center row 4'),
      'main_right_row4' => t('Middle right row 4'),
      'main_row5' => t('Middle row 5'),
    ),
  );
  return $items;
}

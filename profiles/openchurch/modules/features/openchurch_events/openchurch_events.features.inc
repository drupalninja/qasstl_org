<?php
/**
 * @file
 * openchurch_events.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function openchurch_events_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function openchurch_events_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function openchurch_events_node_info() {
  $items = array(
    'openchurch_event' => array(
      'name' => t('Event'),
      'base' => 'node_content',
      'description' => t('Events can be church activities, special meetings, etc.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}

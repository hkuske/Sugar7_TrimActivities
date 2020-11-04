<?php
/*
  TrimActivities
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    '7.*.*',
    '8.*.*',
    '9.*.*',
    '10.*.*',
	),
  'acceptable_sugar_flavors' => 
  array (
    'PRO',
    'CORP',
    'ENT',
    'ULT',
  ),
  'readme' => '',
  'key' => '',
  'author' => 'kuske',
  'description' => 'Scheduler: TrimActivities',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'TrimActivities',
  'published_date' => '2020-11-01 00:00:00',
  'type' => 'module',
  'version' => 20201101,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'TrimActivities',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/',
      'to' => 'custom/',
    ),
  ),
);
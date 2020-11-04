<?php
/*********************************************************************************
 *  TRIM activities and activties_users
 * ...\custom\Extension\modules\Schedulers\Ext\ScheduledTasks\TrimActivities.php
 ********************************************************************************/
/**
 * This array provides the Schedulers admin interface with values for its "Job"
 * dropdown menu.
 */
$func = 'TrimActivities';
$job_strings[] = $func;
$mod_strings['LBL_'.strtoupper($func)] = $func;

/**
 * This is the code for the "Job"
 */
function TrimActivities() {
//  Version: 30.09.2018

	$GLOBALS['log']->info('----->Scheduler fired job of type TrimActivities()');
    global $sugar_config, $timedate;
	define("DEFAULT_INTERVAL","180");
    $activitiesStamp = array (
        'activities' => 'date_entered',
        'activities_users' =>  'date_modified',
    );	
	
	$db = DBManagerFactory::getInstance();
    require_once('include/utils/db_utils.php');
	$admin = Administration::getSettings('activities');
    $prune_interval = !empty($admin->settings['activities_prune_interval']) ? $admin->settings['activities_prune_interval'] : DEFAULT_INTERVAL;
	
	foreach($activitiesStamp as $tableName=>$tableStamp) {

		if(!$db->tableExists($tableName)) {
		   continue;
		}
	    $timeStamp = db_convert("'". $timedate->asDb($timedate->getNow()->get("-".$prune_interval." days")) ."'" ,"datetime");
        $query = "DELETE FROM $tableName WHERE $tableStamp < $timeStamp";
	    $GLOBALS['log']->info("----->Scheduler is about to trim the $tableName table by running the query $query");
		$db->query($query);
	} 

    $GLOBALS['log']->info('----->Scheduler ended job of type TrimActivities()');

    return true;
}

?>

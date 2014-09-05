


<?php 
/*Script to retrieve panopto course ID of moodle course in which the editor is open.
 If no course ID is found, outputs nothing.*/
require(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . '/config.php');

//Function to retrieve Panopto course id given moodle course id.
function get_panopto_course_id($moodle_course_id) {
    global $DB;
    return $DB->get_field('block_panopto_foldermap', 'panopto_id', array('moodleid' => $moodle_course_id));
}

//Get moodle course ID
$id = $COURSE->id;

$panid = get_panopto_course_id($id);

//Return panopto ID if exists
if($panid){
	echo('?externalId=' . $panid);
}
else{
	echo("");
}
?>
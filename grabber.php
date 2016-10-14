<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Script to retrieve panopto course ID of moodle course in which the editor is open. If no course ID is found, outputs nothing.
 *
 * @package   tinymce_panoptobutton
 * @copyright Panopto 2009 - 2016
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__)))))) . '/config.php');

/**
 * Function to retrieve Panopto course id given moodle course id.
 *
 * @param int $moodlecourseid
 */
function get_panopto_course_id($moodlecourseid) {
    global $DB;
    return $DB->get_field('block_panopto_foldermap', 'panopto_id', array('moodleid' => $moodlecourseid));
}

$id = $COURSE->id;
$panid = get_panopto_course_id($id);

if ($panid) {
    echo('?externalId=' . $panid);
} else {
    echo('');
}

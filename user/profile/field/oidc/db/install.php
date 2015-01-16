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
 * @package profilefield_oidc
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft Open Technologies, Inc. (http://msopentech.com/)
 */

/**
 * Install the plugin.
 */
function xmldb_profilefield_oidc_install() {
    global $DB;

    $fieldrec = new \stdClass;
    $fieldrec->shortname = 'authoidcmanage';
    $fieldrec->name = 'authoidcmanage';
    $fieldrec->datatype = 'oidc';
    $fieldrec->description = '';
    $fieldrec->descriptionformat = 1;
    $fieldrec->categoryid = 1;
    $fieldrec->sortorder = 9999999;
    $fieldrec->required = 0;
    $fieldrec->locked = 1;
    $fieldrec->visible = 1;
    $fieldrec->forceunique = 0;
    $fieldrec->signup = 0;
    $fieldrec->defaultdata = null;
    $fieldrec->defaultdataformat = 0;
    $DB->insert_record('user_info_field', $fieldrec);
    return true;
}

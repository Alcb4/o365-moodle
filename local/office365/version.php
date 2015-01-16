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
 * @package local_office365
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft Open Technologies, Inc. (http://msopentech.com/)
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2015011600;
$plugin->requires = 2014051200;
$plugin->component = 'local_office365';
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '1.0.0.0';
$plugin->dependencies = [
    'auth_oidc' => 2015011600,
    'local_o365' => 2015011600,
    'repository_office365' => 2015011600,
    'profilefield_o365' => 2015011600,
    'profilefield_oidc' => 2015011600,
    'filter_oembed' => 2014062400,
];
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
 * Filter hola mundo
 *
 * @package    filter
 * @copyright  2021 Tu nombre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings->add(
        new admin_setting_configcheckbox(
            'filter_marcas_cross', 
            get_string('cross', 'filter_marcas'),
            get_string('cross_desc', 'filter_marcas'), 
            0)
    );

    $settings->add(
        new admin_setting_configcheckbox(
            'filter_marcas_ok', 
            get_string('ok', 'filter_marcas'),
            get_string('ok_desc', 'filter_marcas'), 
            0)
    );

    $settings->add(
        new admin_setting_configcheckbox(
            'filter_marcas_award', 
            get_string('award', 'filter_marcas'),
            get_string('award_desc', 'filter_marcas'), 
            0)
    );
}

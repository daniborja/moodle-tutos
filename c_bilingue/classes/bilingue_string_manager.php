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
 * Cadenas de idioma 'en'
 *
 * @package   local_bilingue
 * @copyright 2023 Adrian <adrian@example.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// namespace es realmente importante:
namespace local_bilingue;

class bilingue_string_manager extends \core_string_manager_standard { 
		/** 
    * Implementation of the get_string() method to display both simplified 
    * Chinese and UK English simultaneously. 
    * 
    * @param string $identifier the identifier of the string to search for 
    * @param string $component the component the string is provided by 
    * @param string|object|array $a optional data placeholder 
    * @param string $langmoodle translation language, null means use 
    * current 
    * @return string 
    */ 

		// // @Override de este method
    // https://docs.moodle.org/dev/String_API
    public function get_string($identifier, $component = '', $a = null, $lang = null) { 
      global $CFG;

      $string;

      // verificar el status del checkbox en el admin
      if (!empty($CFG->local_bilingue_enabled)) {
        $string = parent::get_string($identifier, $component, $a, 'en'); 
        
        $es_mx = parent::get_string($identifier, $component, $a, 'es'); 
        
        if(strlen($es_mx) > 0) { 
          $string .= ' | ' . $es_mx; 
        } 
      } else {
        $string = parent::get_string($identifier, $component, $a, $lang);
      }

			return $string; 
		} 
}


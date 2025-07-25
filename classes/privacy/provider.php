<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see https://www.gnu.org/licenses/.

/**
 * Privacy Subsystem implementation for block_simplecalculator.
 *
 * @package    block_simplecalculator
 * @copyright  2025 Ralf Hagemeister
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_simplecalculator\privacy;

use core_privacy\local\metadata\null_provider;

/**
 * Privacy provider class (null provider).
 *
 * Declares that no personal data is stored.
 */
class provider implements null_provider {
    /**
     * Returns a description of the plugin's data privacy policy.
     *
     * @return string
     */
    /**
     * Returns explanation of why no data is stored.
     *
     * @return string
     */
    public static function get_reason(): string {
        return get_string('privacy:metadata', 'block_simplecalculator');
    }
}

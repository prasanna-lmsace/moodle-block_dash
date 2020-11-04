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
 * Class abstract_data_source.
 *
 * @package    block_dash
 * @copyright  2020 bdecent gmbh <https://bdecent.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_dash\local\dash_framework\structure;

defined('MOODLE_INTERNAL') || die();

/**
 * Class abstract_data_source.
 *
 * @package block_dash
 */
interface table_interface {

    /**
     * Get human readable title for table.
     *
     * @return string
     */
    public function get_title(): string;

    /**
     * Get name of table without prefix.
     *
     * @return string
     */
    public function get_table_name(): string;

    /**
     * Get unique table alias.
     *
     * @return string
     */
    public function get_alias(): string;

    /**
     * @return field_interface[]
     */
    public function get_fields(): array;
}
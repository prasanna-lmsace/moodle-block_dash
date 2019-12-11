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
 * @package    block_dash
 * @copyright  2019 bdecent gmbh <https://bdecent.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_dash\data_grid\field;

use block_dash\data_grid\field\attribute\field_attribute_interface;

/**
 * Represents a predefined field that can be added to a data grid.
 *
 * @package block_dash\data_grid\field
 */
interface field_definition_interface
{
    const VISIBILITY_VISIBLE = 1;
    const VISIBILITY_HIDDEN = 0;

    const DEFAULT_EMPTY_VALUE = '-';

    /**
     * After records are relieved from database each field has a chance to transform the data.
     * Example: Convert unix timestamp into a human readable date format
     *
     * @param mixed $data Raw data associated with this field definition.
     * @param \stdClass $record Full record from database.
     * @return mixed
     */
    public function transform_data($data, \stdClass $record);

    /**
     * @return string
     */
    public function get_name();

    /**
     * @return string
     */
    public function get_title();

    /**
     * @return int
     */
    public function get_visibility();

    /**
     * @param int $visibility
     */
    public function set_visibility($visibility);

    /**
     * Add attribute to this field definition.
     *
     * @param field_attribute_interface $attribute
     */
    public function add_attribute(field_attribute_interface $attribute);

    /**
     * Remove attribute to this field definition.
     *
     * @param field_attribute_interface $attribute
     */
    public function remove_attribute(field_attribute_interface $attribute);

    /**
     * @return field_attribute_interface[]
     */
    public function get_attributes();

    /**
     * Check if field has an attribute type.
     *
     * @param string $classname Full class path to attribute
     * @return bool
     */
    public function has_attribute($classname);

    /**
     * Get a single option.
     *
     * @param $name
     * @return mixed|null
     */
    public function get_option($name);

    /**
     * Set option on field.
     *
     * @param $name
     * @param $value
     */
    public function set_option($name, $value);

    /**
     * Set options on field.
     *
     * @param array $options
     */
    public function set_options($options);

    /**
     * Get all options for this field.
     *
     * @return array
     */
    public function get_options();
}

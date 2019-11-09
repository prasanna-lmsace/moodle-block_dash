<?php

namespace block_dash\configuration;

use block_dash\template\template_interface;

interface configuration_interface
{
    /**
     * @return \context
     */
    public function get_context();

    /**
     * @return template_interface
     */
    public function get_template();

    /**
     * Check if block is ready to display content.
     *
     * @return bool
     */
    public function is_fully_configured();

    /**
     * Create new configuration instance
     *
     * @param \block_base $block_instance
     * @return configuration_interface
     */
    public static function create_from_instance(\block_base $block_instance);
}

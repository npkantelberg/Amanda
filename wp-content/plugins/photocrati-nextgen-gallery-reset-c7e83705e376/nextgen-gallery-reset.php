<?php
/* Plugin Name: NextGEN Gallery Reset
 * Plugin URI: http://nextgen-gallery.com/
 * Description: Reset all NextGEN Gallery settings and options
 * Version: 0.5
 * Author: Photocrati, Imagely
 * Author URI: https://imagely.com/
 * License: GPL2
 *
 * Copyright 2013-2016 Photocrati (nextgen@photocrati.com)
 * Copyright 2016 Imagely (nextgen@imagely.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
/**
 * Class NextGEN_Gallery_Reset_Plugin
 *
 * Automatically adds actions creating a Wordpress page w/template & form. When processed
 * it will reset all NextGEN settings, options, and custom posts
 */
// Version 0.4 is only compatible with NextGen 2.1 and higher. Please use 0.3 for earlier versions of NextGen
class NextGEN_Gallery_Reset_Plugin {

    protected $title = 'NextGEN Gallery Reset';

    public function __construct()
    {
        $this->add_actions();
    }

    function add_actions()
    {
        add_action('admin_menu', array(&$this, 'register_pages'));
    }

    function register_pages()
    {
        add_submenu_page(
            'tools.php',
            $this->title,
            $this->title,
            'manage_options',
            'nextgen-gallery-reset-page',
            array(&$this, 'tool_page_callback')
        );
    }

    /**
     * This will reset all options, lightboxes, display types, etc to their defaults.
     *
     * This will also remove all stored display types to fix a bug that caused multiple posts to be created
     * @return bool If process ran; NEXTGEN_GALLERY_PLUGIN_BASENAME must be defined
     */
    function reset_action()
    {
        $retval = FALSE;

        if (!defined('NGG_PLUGIN_BASENAME'))
            return $retval;

        global $wpdb;

        // Flush the cache
        C_Photocrati_Transient_Manager::flush('all');

        // Uninstall the plugin
        $settings = C_NextGen_Settings::get_instance();

        if (defined('NGG_PRO_PLUGIN_VERSION') || defined('NEXTGEN_GALLERY_PRO_VERSION'))
            C_Photocrati_Installer::uninstall('photocrati-nextgen-pro');

        C_Photocrati_Installer::uninstall('photocrati-nextgen');

        // removes all ngg_options entry in wp_options
        $settings->reset();
        $settings->destroy();

        // clear NextGEN's capabilities from the roles system
        $capabilities = array(
            "NextGEN Gallery overview",
            "NextGEN Use TinyMCE",
            "NextGEN Upload images",
            "NextGEN Manage gallery",
            "NextGEN Manage others gallery",
            "NextGEN Manage tags",
            "NextGEN Edit album",
            "NextGEN Change style",
            "NextGEN Change options",
            "NextGEN Attach Interface"
        );
        $roles = array("subscriber", "contributor", "author", "editor", "administrator");
        foreach ($roles as $role) {
            $role = get_role($role);
            foreach ($capabilities as $capability) {
                if (!is_null($role))
                    $role->remove_cap($capability);
            }
        }

        // Some installations of NextGen that upgraded from 1.9x to 2.0x have duplicates installed,
        // so for now (as of 2.0.21) we explicitly remove all display types and lightboxes from the
        // db as a way of fixing this.
        $wpdb->query($wpdb->prepare("DELETE FROM {$wpdb->posts} WHERE post_type = %s", 'display_type'));
        $wpdb->query($wpdb->prepare("DELETE FROM {$wpdb->posts} WHERE post_type = %s", 'lightbox_library'));

        return $retval;
    }

    /**
     * Handles page HTML generation & output, invokes $this->reset_action() when its form has been submitted.
     */
    function tool_page_callback()
    {
        wp_enqueue_script('jquery');

        // establish some strings to be rendered
        $message = '';
        $screen_icon = get_screen_icon();
        $form_url = admin_url('tools.php?page=nextgen-gallery-reset-page');
        $nonce_field = wp_nonce_field(
            'nextgen_gallery_reset_plugin_action',
            'nextgen_gallery_reset_plugin_field'
        );
        $reset_paragraph = 'This button will reset all NextGEN settings and options for this site.';
        $reset_value = 'Reset all options to default settings';
        $reset_confirmation = 'Reset all options to default settings?\n\nChoose [Cancel] to Stop, [OK] to proceed.';

        // check for nonce & process if it matches
        if (isset($_POST['nextgen_gallery_reset_plugin_field'])
            &&  wp_verify_nonce($_POST['nextgen_gallery_reset_plugin_field'], 'nextgen_gallery_reset_plugin_action'))
        {
            if ($this->reset_action())
                $message = '<div class="updated">All settings have been reverted to their defaults</div>';
        }

        $html = <<<NGG_RESET_HTML
<style type='text/css'>
    .wrap input[type='submit'] {
    }
</style>
<div class='wrap'>
    {$screen_icon}
    <h2>{$this->title}</h2>
    <br/>
    {$message}
    <form method='post' action='{$form_url}' id='nextgen_gallery_reset_plugin_form'>
        {$nonce_field}
        <p>{$reset_paragraph}</p>
        <input type='submit'
               class='button-secondary'
			   data-confirm='{$reset_confirmation}'
               name='nextgen_gallery_reset_plugin_do_action'
               value='{$reset_value}'/>
    </form>
</div>
<script type='text/javascript'>
jQuery(function($) {
    $('#nextgen_gallery_reset_plugin_form').submit(function(event) {
        if (!confirm("{$reset_confirmation}")) {
            event.preventDefault();
        }
    });
});
</script>
NGG_RESET_HTML;

        print $html;
    }
}

// all logic is self-contained
$NextGEN_Gallery_Reset_Plugin = new NextGEN_Gallery_Reset_Plugin();

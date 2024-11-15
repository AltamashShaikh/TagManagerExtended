<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\TagManagerExtended;

class TagManagerExtended extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return array(
            'AssetManager.getStylesheetFiles' => 'getStylesheetFiles',
            'AssetManager.getJavaScriptFiles' => 'getJavaScriptFiles',
        );
    }

    public function getStylesheetFiles(&$files)
    {
        $files[] = "plugins/TagManagerExtended/stylesheets/style.less";
    }

    public function getJavaScriptFiles(&$files)
    {
        $files[] = "plugins/TagManagerExtended/javascripts/script.js";
    }
}

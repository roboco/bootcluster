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
 * Theme More config file.
 *
 * @package    theme_bootcluster
 * @copyright  2016 logcluster
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'bootcluster';
$THEME->parents = array('bootstrap');

$THEME->doctype = 'html5';
$THEME->sheets = array('custom');
$THEME->lessfile = 'bootcluster';
$THEME->parents_exclude_sheets = array('bootstrap' => array('moodle'));
$THEME->lessvariablescallback = 'theme_bootcluster_less_variables';
$THEME->extralesscallback = 'theme_bootcluster_extra_less';
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->enable_dock = true;
$THEME->editor_sheets = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_bootcluster_process_css';

$THEME->layouts = array(
  // Most backwards compatible layout without the blocks - this is the layout used by default.
  'base' => array(
    'file' => 'default.php',
    'regions' => array(),
  ),
  // Standard layout with blocks, this is recommended for most pages with general information.
  'standard' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
  ),
  // Main course page.
  'course' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
    'options' => array('langmenu' => true),
  ),
  'coursecategory' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
  ),
  // Part of course, typical for modules - default page layout if $cm specified in require_login().
  'incourse' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
  ),
  // The site home page.
  'frontpage' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
    'options' => array('nonavbar' => true),
  ),
  // Server administration scripts.
  'admin' => array(
    'file' => 'default.php',
    'regions' => array('side-pre'),
    'defaultregion' => 'side-pre',
    'options' => array('fluid' => true),
  ),
  // My dashboard page.
  'mydashboard' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
    'options' => array('langmenu' => true),
  ),
  // My public page.
  'mypublic' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre',
  ),
  'login' => array(
    'file' => 'default.php',
    'regions' => array(),
    'options' => array('langmenu' => true, 'nonavbar' => true),
  ),

  // No blocks and minimal footer - used for legacy frame layouts only!
  'frametop' => array(
    'file' => 'default.php',
    'regions' => array(),
    'options' => array('nofooter' => true, 'nocoursefooter' => true),
  ),
  // Should display the content and basic headers only.
  'print' => array(
    'file' => 'default.php',
    'regions' => array(),
    'options' => array('nofooter' => true, 'nonavbar' => false),
  ),
  // The pagelayout used for reports.
  'report' => array(
    'file' => 'default.php',
    'regions' => array('side-pre'),
    'defaultregion' => 'side-pre',
  ),
  // The pagelayout used for safebrowser and securewindow.
  'secure' => array(
    'file' => 'default.php',
    'regions' => array('side-pre', 'side-post'),
    'defaultregion' => 'side-pre'
  ),
);

$THEME->javascripts_footer = array(
  'jasny-bootstrap.min',
);
<?php
// This file is part of The Bootstrap Moodle theme
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


$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);

$knownregionpre = $PAGE->blocks->is_known_region('side-pre');
$knownregionpost = $PAGE->blocks->is_known_region('side-post');

$regions = theme_bootcluster_grid($hassidepre, $hassidepost);
$PAGE->set_popup_notification_allowed(false);

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>

<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<!--//  Side Bar Off Canvas-->
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
    <div class="logo-wrap <?php $regions['pre'] ?>">
        <a href="<?php echo $CFG->wwwroot ?>" class="logo"></a>
    </div>
    <?php
    if ($knownregionpre) {
        echo $OUTPUT->blocks('side-pre', $regions['pre']);
    }
    ?>
    <div id="moodle-navbar" class="navbar-left">
        <?php echo $OUTPUT->custom_menu(); ?>
        <ul class="nav pull-left">
            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
        </ul>
    </div>
</div>

<!--// Top title bar, navigation-->
<nav role="navigation" class="navbar navbar-default">
    <div class="container-fluid content-push">
        <div class="row">
            <div class="col-md-12">
        <div class="navbar-header pull-left">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
        </div>
        <div class="navbar-header pull-right">
            <?php echo $OUTPUT->user_menu(); ?>
        </div>
            </div>
        </div>
    </div>
</nav>

<!--// Main Content-->
<div id="page" class="container-fluid content-push">
    <header id="page-header" class="clearfix">
        <?php echo $OUTPUT->page_heading(); ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav" role="navigation" aria-label="breadcrumb"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>

        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>

    <div id="page-content" class="row">
        <div id="region-main" class="<?php echo $regions['content']; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </div>
            <?php
            if ($knownregionpost) {
                echo $OUTPUT->blocks('side-post', $regions['post']);
            }
            ?>
    </div>

    <footer id="page-footer">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
        <?php
        echo $OUTPUT->login_info();
        echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
        ?>
    </footer>
</div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>

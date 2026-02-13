<?php
defined('MOODLE_INTERNAL') || die();
function theme_demolaypotiguar_get_pre_scss($theme) {
    global $CFG;
    $content = '';
    if (file_exists($CFG->dirroot . '/theme/demolaypotiguar/scss/pre.scss')) {
        $content = file_get_contents($CFG->dirroot . '/theme/demolaypotiguar/scss/pre.scss');
    }
    return $content;
}

function theme_demolaypotiguar_get_extra_scss($theme) {
    global $CFG;
    $content = '';
    if (file_exists($CFG->dirroot . '/theme/demolaypotiguar/scss/post.scss')) {
        $content = file_get_contents($CFG->dirroot . '/theme/demolaypotiguar/scss/post.scss');
    }
    return $content;
}

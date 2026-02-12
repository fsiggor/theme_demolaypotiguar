<?php
defined('MOODLE_INTERNAL') || die();
function theme_demolaypotiguar_get_pre_scss($theme) {
    global $CFG;
    return file_get_contents($CFG->dirroot . '/theme/demolaypotiguar/scss/pre.scss');
}

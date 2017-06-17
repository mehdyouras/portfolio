<?php

// Get theme asset URI
function get_pf_asset($resource) {
    return get_template_directory_uri().'/assets/'.trim($resource);
}
// Echo theme asset URI
function pf_asset($resource) {
    echo get_pf_asset($resource);
}
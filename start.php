<?php
namespace Evan\React;

elgg_register_event_handler('init', 'system', function() {
    elgg_register_page_handler('react', __NAMESPACE__ . '\\page_handler');
    
    elgg_register_simplecache_view('react.js');
});

function page_handler(array $segments, $base) {
    switch ($segments[0]) {
        case 'hello':
            echo elgg_view_resource('react/hello');
            return true;
        default:
            return false;
    }
}
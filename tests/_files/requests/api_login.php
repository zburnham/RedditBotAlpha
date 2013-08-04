<?php

/**
 * Data to be used for unit testing of /api/login calls.
 */

$test_data = array();

$test_data['api_login_success'] = array(
    'post' => array(
        'user' => 'test',
        'passwd' => 'testpassword',
        'api_type' => 'json',
        ),
    'get' => array(
        'username' => 'test',
        ),
    'prototype' => array(
        'query_string' => '#username#',
    ),
);

$test_data['api_login_bad_username'] = array(
    'post' => array(
        'user' => 'bad',
        'passwd' => 'testpassword',
        'api_type' => 'json',
        ),
    'get' => array(
        'username' => 'bad',
        ),
    'prototype' => array(
        'query_string' => '#username#',
    ),
);

$test_data['api_login_bad_passwd'] = array(
    'post' => array(
        'user' => 'test',
        'passwd' => 'badpassword',
        'api_type' => 'json',
        ),
    'get' => array(
        'username' => 'test',
        ),
    'prototype' => array(
        'query_string' => '#username#',
    ),
);

$test_data['api_login_bad_api_type'] = array(
    'post' => array(
        'user' => 'test',
        'passwd' => 'testpassword',
        'api_type' => 'blargh',
        ),
    'get' => array(
        'username' => 'test',
        ),
    'prototype' => array(
        'query_string' => '#username#',
    ),
);

// For some reason, the match isn't enforced, this returns success

$test_data['api_login_user_and_username_no_match'] = array(
    'post' => array(
        'user' => 'test',
        'passwd' => 'testpassword',
        'api_type' => 'json',
        ),
    'get' => array(
        'username' => 'somethingelse',
        ),
    'prototype' => array(
        'query_string' => '#username#',
    ),
);

return $test_data;
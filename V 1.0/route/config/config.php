<?php
/**
 * Route - PHP REST Framework
 *
 * @author: Ajinkya Apte
 * @license: Mozilla Public License Version 2.0
 * @licenseFileLocation: route/License.txt
 *
 * @file: All Route constants are defined in this file
 * Date: 3/23/13
 * Time: 4:30 PM
 */

if(!function_exists('doDefine')) {
    function doDefine($key, $value) {
        if(!defined($key)) {
            define($key, $value);
        }
    }
}

//File Paths
doDefine('ROUTE_CONFIG','/config/route.config');

//Route.config constants
doDefine('ROUTE_CONFIG_COMMENT', '##');
doDefine('ROUTE_CONFIG_HTTP_PROTOCOLS_VAR','routeHttpProtocols');
doDefine('ROUTE_CONFIG_LANDING_PAGE_VAR','routeLandingPage');

//Error codes
doDefine('ROUTE_ERROR_CONFIG_MISSING', '181');
doDefine('ROUTE_ERROR_BAD_ROUTE_CONFIG_VAR', '182');
doDefine('ROUTE_ERROR_INCORRECT_HTTP_URL', '183');
doDefine('ROUTE_ERROR_INCORRECT_HTTP_PORT', '184');
doDefine('ROUTE_ERROR_HTTP_METHOD_NOT_SUPPORTED', '185');
doDefine('ROUTE_ERROR_INCORRECT_ANNOTATION', '186');
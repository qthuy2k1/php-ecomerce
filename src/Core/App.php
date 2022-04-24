<?php
    function getUrl()
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
        $parsed = parse_url($actual_link);
        $query = $parsed['query'];
    
        parse_str($query, $params);
        // die(print_r($params));
        return $params;
    }
?>
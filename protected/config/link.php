<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of link
 *
 * @author Huy
 */
class Link {
    
    private function __construct() {
    }
    
    public static function Build($link)
    {
        $base = 'http://' . getenv('SERVER_NAME');
        
        // If HTTP_SERVER_PORT is defined and different than default
        if(defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80')
        {
            // Append server port
            $base .= ':' . HTTP_SERVER_PORT;
        }
        
        $link = $base . VIRTUAL_LOCATION . $link;
        
        // Escape HTML
        return htmlspecialchars($link, ENT_QUOTES);
    }
}

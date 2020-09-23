<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function getHead(){
    require_once(APPPATH."views/component/header.php");
    }   

    function getScripts(){
    require_once(APPPATH."views/component/scripts.php");
    }

    function getFooter(){
    require_once(APPPATH."views/component/footer.php");
    }
    ?>
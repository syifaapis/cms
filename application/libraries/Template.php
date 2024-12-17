<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template {
    protected $CI;
    var $template_data = array();

    function set($name, $value) {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
        $this->CI =& get_instance();
        // Load the view and set it as 'contents'
        $contents = $this->CI->load->view($view, $view_data, TRUE);
        $this->set('contents', $contents);
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}

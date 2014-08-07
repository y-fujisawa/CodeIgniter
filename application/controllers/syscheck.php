<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syscheck extends CI_Controller
{
    /**
     * Syscheck index
     *
     * @param none
     *
     */
    public function index()
    {
        try {
            $this->load->library('SyscheckClass');
            
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }
}

<?php class Analysing extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
    }
    public function index()
    {
        $result = array(
            'path_file' => 'analysing/index',
            'menu_name' => 'Diagnostic'
        );
        $this->load->view('admin/index', $result);
    }
}

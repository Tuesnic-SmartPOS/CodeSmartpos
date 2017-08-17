<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Correlatives extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        if (! $this->user) {
            redirect('login');
        }
    }

    public function add()
    {
        date_default_timezone_set($this->setting->timezone);
        $date = date("Y-m-d H:i:s");
        $_POST['created_at'] = $date;
        $correlative = Correlative::create($_POST);
        redirect("/settings?tab=correlatives", "location");
    }

    public function edit($id = FALSE)
    {
        if ($_POST) {
            $correlative = Correlative::find($id);
            $correlative->update_attributes($_POST);
            redirect("/settings?tab=correlatives", "location");
        } else {
            $this->view_data['correlative'] = Correlative::find($id);
            $this->content_view = 'setting/modifyCorrelative';
        }
    }

    public function delete($id)
    {
        $correlative = Correlative::find($id);
        $correlative->delete();
        redirect("/settings?tab=correlatives", "location");
    }
}

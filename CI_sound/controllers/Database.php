<?php
defined("BASEPATH") OR exit("No Direct Script");

class Database extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->dbforge();
        //$this->load->model(array("dbmodel"));
    }
    public function addmenudb(){
        $field = array(
            "id_category" => array(
                "type" => "int",
                "auto_increment" => true,
                "unsigned" => true //supaya integernya gabisa ikut mines. ex: jarak int -10 <-> 10, maka diubah jadi 0 <-> 20
            ),
            "nama_category" => array(
                "type" => "text",
            ),
            "id_user_category" => array(
                "type" => "int",
            ),
            "tgl_submit_category" => array(
                "type" => "date",
            ),
            "status_category" => array(
                "type" => "tinyint",
            ),
            
            
        );
        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id_category',TRUE);
        //$this->dbforge->add_key('field_lain',TRUE); //tambahin kalau mau bkin composite key
        
        $this->dbforge->create_table('CATEGORY', TRUE);
    }
}
?>
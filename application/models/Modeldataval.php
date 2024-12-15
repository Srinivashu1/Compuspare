<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Modeldataval extends CI_model
{



    public function get_last_row()
    {
        // Replace 'date_column' with your date field

        $query = $this->db->get('slide'); // Replace 'your_table' with your table name
        return $query->result_array();


    }
    public function seviceinsertshow()
    {
        $this->db->order_by('id', 'DESC'); // Replace 'date_column' with your date field
        $this->db->limit(4);
        $query = $this->db->get('services'); // Replace 'your_table' with your table name
        return $query->result_array();
    }
    public function supportinsertshow()
    {
        $this->db->order_by('id', 'DESC'); // Replace 'date_column' with your date field
        $this->db->limit(1);
        $query = $this->db->get('support'); // Replace 'your_table' with your table name
        return $query->result_array();
    }
    public function galleryinsertshow()
    {
        $this->db->order_by('id', 'DESC'); // Replace 'date_column' with your date field
        $this->db->limit(6);
        $query = $this->db->get('gallery'); // Replace 'your_table' with your table name
        return $query->result_array();
    }
    public function brandinsertshow()
    {
        $this->db->order_by('id', 'DESC'); // Replace 'date_column' with your date field
        $query = $this->db->get('brand'); // Replace 'your_table' with your table name
        return $query->result_array();
    }
    public function applyinsertshow()
    {
        $this->db->order_by('id', 'DESC'); // Replace 'date_column' with your date field
        $this->db->limit(1);
        $query = $this->db->get('apply'); // Replace 'your_table' with your table name
        return $query->result_array();
    }
    public function engineersinsertshow()
    {
        $this->db->order_by('id', 'DESC'); // Replace 'date_column' with your date field
        $this->db->limit(4);
        $query = $this->db->get('engineers'); // Replace 'your_table' with your table name
        return $query->result_array();
    }





}
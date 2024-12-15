<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Modeldata extends CI_model
{
    function insertvalue($data)
    {

        $this->db->insert('slide', $data);
        return true;

    }
    public function passwordvalid($username, $password)
    {

        $this->db->where('username', $username);
        $this->db->where('password', $password); // Make sure you store passwords securely
        $query = $this->db->get('login'); // 'users' is your table name

        if ($query->num_rows() == 1) {

            return true;
        } else {
            return false;
        }
    }
    public function updateshowstatus($id, $status, $tname)
    {
        $this->db->where('id', $id); // Specify the row to update
        $this->db->update($tname, ['status' => $status]); // Update the status column
        return true;
    }
    public function supportupdatetb($i, $data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $i);
        return $this->db->update('support', $data);
    }
    public function deleteslidemodel($id, $tname)
    {
        $this->db->where('id', $id);
        $this->db->delete($tname); // Update the status column
        return true;
    }
    function servicein($data)
    {
        $this->db->insert('services', $data);
        return true;
    }

    public function serviceupdate($i, $data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $i);
        return $this->db->update('services', $data);
    }

    public function updateslideone($i, $data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $i);
        $this->db->update('slide', $data);
        return true;

    }
    function brandin($data)
    {
        $this->db->insert('brand', $data);
        return true;
    }

    public function brandupdate($id, $data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $id);
        return $this->db->update('brand', $data);
    }


    public function get_last_row()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('slide')->row();
    }
    public function get_last_row_services()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('services')->row();
    }
    public function get_last_row_support()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('support')->row();
    }

    public function get_last_row_gallery()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('gallery')->row();
    }
    public function get_last_row_brand()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('brand')->row();
    }
    public function get_last_row_apply()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('apply')->row();
    }
    public function get_last_row_engineer()
    {
        $this->db->order_by('id', 'DESC'); // Assuming 'id' is the primary key
        $this->db->limit(1);
        return $this->db->get('engineers')->row();
    }




    public function supportconupdate($data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $data['id']);
        return $this->db->update('support', $data);
    }
    public function applyconupdate($data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $data['id']);
        return $this->db->update('apply', $data);
    }
    public function galleryupdate($data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $data['id']);
        return $this->db->update('gallery', $data);
    }

    public function applyupdate($id,$data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $id);
        return $this->db->update('apply', $data);

    }


    public function engineerupdate($id,$data)
    {
        // Assuming 'id' is the primary key
        $this->db->where('id', $id);
        return $this->db->update('engineers', $data);

    }


    function supportin($data)
    {
        $this->db->insert('support', $data);
        return true;
    }
    function galleryin($data)
    {
        $this->db->insert('gallery', $data);
        return true;
    }

    function applyin($data)
    {
        $this->db->insert('apply', $data);
        return true;
    }
    function engineersin($data)
    {
        $this->db->insert('engineers', $data);
        return true;
    }

    public function homeinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('slide');

        return $query->result_array();

    }
    public function servicesinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('services');

        return $query->result_array();

    }
    public function aboutinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('support');

        return $query->result_array();

    }
    public function brandinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('brand');

        return $query->result_array();

    }
    public function galleryinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('gallery');

        return $query->result_array();

    }
    public function applyinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('apply');

        return $query->result_array();

    }
    public function engineerinsertshow()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('engineers');

        return $query->result_array();

    }









}
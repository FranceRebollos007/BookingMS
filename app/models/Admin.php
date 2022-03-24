<?php
class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function findCustomer() {
        $this->db->query('SELECT * FROM user WHERE role = "Customer"  ORDER BY createdate ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function findCustomerById($id) {
        $this->db->query('SELECT * FROM user WHERE id = :id AND role = "Customer"');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function findServices() {
        $this->db->query('SELECT * FROM services ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function findServicesById($id) {
        $this->db->query('SELECT * FROM services WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function addService($data) {
        $this->db->query('INSERT INTO services (id, service, price) VALUES(:id, :service, :price)');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':service', $data['service']);
        $this->db->bind(':price', $data['price']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function updateServices($data){
        $this->db->query('UPDATE services SET service = :service, price = :price WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':service', $data['service']);
        $this->db->bind(':price', $data['price']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }   
    }
    public function deleteServices($data){
        $this->db->query('DELETE FROM services WHERE id =:id');
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
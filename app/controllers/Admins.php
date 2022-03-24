<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }

    public function index() {
        $admins = $this->adminModel->findCustomer();

        $data = [
            'admins' => $admins
        ];

        $this->view('admins/index');
    }

    public function customers() {
        $admins = $this->adminModel->findCustomer();
        // var_dump($admins);
        $data = [
            'admins' => $admins
        ];
        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/index");
        }
        elseif($_SESSION['role'] == "Customer"){
            header("Location: " . URLROOT . "/index");
        }
        else{
            $this->view('admins/customers', $data);
        }
    }
    public function services() {
        $admins = $this->adminModel->findServices();
        // var_dump($admins);
        $data = [
            'admins' => $admins
        ];
        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/index");
        }
        elseif($_SESSION['role'] == "Customer"){
            header("Location: " . URLROOT . "/index");
        }
        else{
            $this->view('admins/services', $data);
        }

        
    }
    public function addServices() {
        // $admins = $this->adminModel->addService();
        // var_dump($admins);
        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/index");
        }
        elseif($_SESSION['role'] == "Customer"){
            header("Location: " . URLROOT . "/index");
        }

        $data = [
            'service'=> '',
            'price' => '',
            'serviceError' => '',
            'priceError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'user_id'=> $_SESSION['user_id'],
                'service'=> trim($_POST['service']),
                'price' => trim($_POST['price']),
                'serviceError' => '', 
                'priceError' => ''
            ];
            // var_dump($data['service']);
            if (empty($data['service'])) {
                $data['serviceError'] = 'Please enter a value in this fields.';
            } 
            if (empty($data['price'])) {
                $data['priceError'] = 'Please enter a value in this fields.';
            } 
            if (empty($data['serviceError']) && empty($data['priceError'])) {
                if ($this->adminModel->addService($data)) {
                    header("Location: " . URLROOT . "/admins/services");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('admins/addServices', $data);
            }
        }

        $this->view('admins/addServices', $data);
    }

    public function updateServices($id){
        $admins = $this->adminModel->findServicesById($id);

        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/index");
        }
        elseif($_SESSION['role'] == "Customer"){
            header("Location: " . URLROOT . "/index");
        }
        // var_dump($admins);
        $data = [
            'admins' => $admins,
            'service'=> '',
            'price' => '',
            'serviceError' => '',
            'priceError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'id' => $id,
                'admins' => $admins,
                'user_id'=> $_SESSION['id'],
                'service'=> trim($_POST['service']),
                'price' => trim($_POST['price']),
                'serviceError' => '', 
                'priceError' => ''
            ];
            // var_dump($data['service']);
            if($data['service'] == $this->adminModel->findServicesById($id)->service) {
                $data['serviceError'] == 'At least change the service!';
            }

            if($data['price'] == $this->adminModel->findServicesById($id)->price) {
                $data['priceError'] == 'At least change the price!';
            }

            if (empty($data['service'])) {
                $data['serviceError'] = 'Please enter a value in this fields.';
            } 

            if (empty($data['price'])) {
                $data['priceError'] = 'Please enter a value in this fields.';
            } 

            if (empty($data['serviceError']) && empty($data['priceError'])) {
                if ($this->adminModel->updateServices($data)) {
                    header("Location: " . URLROOT . "/admins/updateServices");
                } else {
                    die("Something went wrong, please try again!");
                }
            } else {
                $this->view('admins/updateServices', $data);
            }
        }

        $this->view('admins/updateServices', $data);
    }
    public function stylist() {
        // $admins = $this->adminModel->findCustomer();
        // var_dump($admins);
        // // $data = [
        // //     'customers' => $customers
        // // ];

        $this->view('admins/stylist');
    }
    public function deleteServices($id) {
        $admins = $this->adminModel->findServicesById($id);

        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/index");
        }
        elseif($_SESSION['role'] == "Customer"){
            header("Location: " . URLROOT . "/index");
        }
        // var_dump($admins);
        $data = [
            'admins' => $admins,
            'service'=> '',
            'price' => '',
            'serviceError' => '',
            'priceError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->adminModel->deleteServices($id)) {
                header("Location: " . URLROOT . "/services");
            } else {
               die('Something went wrong!');
            }
        }
    }
}
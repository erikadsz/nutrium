<?php

ob_start();

require  __DIR__ . "/../vendor/autoload.php";

// os headers abaixo são necessários para permitir o acesso a API
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header('Access-Control-Allow-Credentials: true'); // Permitir credenciais
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

use CoffeeCode\Router\Router;

$route = new Router(url(),":");

$route->namespace("Source\App\Api");

/* USERS */

$route->group("/users");

$route->get("/list", "Users:listUsers"); 
$route->post("/create","Users:createUser");
$route->post("/login","Users:loginUser");
$route->post("/update","Users:updateUser");
$route->post("/set-password","Users:setPassword");

$route->group("null");

$route->group("/patients");
$route->get("/listpatients", "Patients:listPatients");   
$route->get("/listbyid/{patientId}", "Patients:listById");   
$route->post("/createpatient", "Patients:createPatient");
$route->post("/update-patient/{patientId}", "Patients:updatePatient");       
$route->delete("/delete/{patientId}", "Patients:deletePatient");  



$route->group("null");

$route->group("/clinics");
$route->get("/listclinics", "Clinics:listClinics");   
$route->get("/listclbyid/{clinicId}", "Clinics:listByIdClinic");       
$route->post("/createclinic", "Clinics:createClinic");    
$route->post("/updateclinic/{clinicId}", "Clinics:updateClinic");          
$route->delete("/removeclinic/{clinicId}", "Clinics:deleteClinic");    



$route->group("null");

/* FAQS */

$route->group("/faqs");

$route->get("/","Faqs:listFaqs");

$route->group("null");

$route->dispatch();

/** ERROR REDIRECT */
if ($route->error()) {
    header('Content-Type: application/json; charset=UTF-8');
    http_response_code(404);

    echo json_encode([
        "errors" => [
            "type " => "endpoint_not_found",
            "message" => "Não foi possível processar a requisição"
        ]
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

ob_end_flush();
Entidade Patients:

$route->group("/patients");
$route->get("/listpatients", "Patients:listPatients");  


exemplo:
````
[
    {
        "patientId": 8,
        "patientCpf": "2147483647",
        "patientName": "Jane Smith",
        "patientEmail": "janesmith@example.com",
        "patientCity": "Townsville",
        "patientAdress": "456 Oak St",
        "patientPayment": "Cash",
        "patientClinicRegister": "Clinic B",
        "patientDietRegister": "Diet Plan 2",
        "patientPhoneNumber": "555-5678",
        "patientWeight": "65.000",
        "patientHeight": "1.70",
        "fk_dietPlanId": 2,
        "fk_register": 2
    },
    {
        "patientId": 9,
        "patientCpf": "2147483647",
        "patientName": "Alice Johnson",
        "patientEmail": "alicejohnson@example.com",
        "patientCity": "Metropolis",
        "patientAdress": "789 Pine St",
        "patientPayment": "Debit Card",
        "patientClinicRegister": "Clinic C",
        "patientDietRegister": "Diet Plan 3",
        "patientPhoneNumber": "555-9876",
        "patientWeight": "70.000",
        "patientHeight": "1.75",
        "fk_dietPlanId": 3,
        "fk_register": 3
    },
    {
        "patientId": 10,
        "patientCpf": "23456789012",
        "patientName": "Michael Brown",
        "patientEmail": "michaelbrown@example.com",
        "patientCity": "Smalltown",
        "patientAdress": "101 Maple St",
        "patientPayment": "Credit Card",
        "patientClinicRegister": "Clinic B",
        "patientDietRegister": "Diet Plan 2",
        "patientPhoneNumber": "555-1111",
        "patientWeight": "80.000",
        "patientHeight": "1.85",
        "fk_dietPlanId": 2,
        "fk_register": 4
    }
]
````

parâmetros: $patientId, $patientCpf, $patientName, $patientEmail, $patientCity, $patientAdress, $patientPayment,$patientClinicRegister, $patientDietRegister, $patientPhoneNumber, $patientWeight, $patientHeight, $fk_dietPlanId, $fk_register;




$route->get("/listbyid/{patientId}", "Patients:listById"); 
http://localhost/nutrium/api/patients/listbyid/13
exemplo:
````
[
    {
        "patientId": 13,
        "patientCpf": "121212122",
        "patientName": "antonio22",
        "patientEmail": "antonioss@gmail.com",
        "patientCity": "Butiás",
        "patientAdress": "rua talf",
        "patientPayment": "asdasdasc",
        "patientClinicRegister": "asdasdawdasg",
        "patientDietRegister": "asdasde",
        "patientPhoneNumber": "111111111",
        "patientWeight": "1.330",
        "patientHeight": "1.44",
        "fk_dietPlanId": 1
    }
]
````
parâmetros: $patientId, $patientCpf, $patientName, $patientEmail, $patientCity, $patientAdress, $patientPayment,$patientClinicRegister, $patientDietRegister, $patientPhoneNumber, $patientWeight, $patientHeight, $fk_dietPlanId, $fk_register;
 
$route->post("/createpatient", "Patients:createPatient");
exemplo:
{
    "type": "success",
    "message": "Paciente cadastrado com sucesso!"
}


parâmetros: $patientCpf, $patientName, $patientEmail, $patientCity, $patientAdress, $patientPayment,$patientClinicRegister, $patientDietRegister, $patientPhoneNumber, $patientWeight, $patientHeight, $fk_dietPlanId, $fk_register;


$route->post("/update-patient/{patientId}", "Patients:updatePatient");
exemplo: 
http://localhost/nutrium/api/patients/update-patient/13
bool(true)

parâmetros: $patientCpf, $patientName, $patientEmail, $patientCity, $patientAdress, $patientPayment,$patientClinicRegister, $patientDietRegister, $patientPhoneNumber, $patientWeight, $patientHeight, $fk_dietPlanId, $fk_register;


$route->delete("/delete/{patientId}", "Patients:deletePatient");
exemplo:
http://localhost/nutrium/api/patients/delete/9
{
    "type": "success",
    "message": "Paciente Excluido com sucesso!"
}
parâmetros: $patientId








Entidade Clinics


$route->group("/clinics");
$route->get("/listclinics", "Clinics:listClinics");  
exemplo:
````
[
    {
        "clinicId": 1,
        "clinicName": "troca",
        "clinicAdress": "rua teste 3",
        "clinicPhoneNumber": "1111111111"
    },
    {
        "clinicId": 2,
        "clinicName": "Clínica B",
        "clinicAdress": "Rua 456, Bairro Y",
        "clinicPhoneNumber": "2345-6789"
    },
    {
        "clinicId": 3,
        "clinicName": "Clínica C",
        "clinicAdress": "Rua 789, Bairro Z",
        "clinicPhoneNumber": "3456-7890"
    }
]
````

Parâmetros: $clinicId, $clinicName,$clinicAdress, $clinicPhoneNumber;


$route->get("/listclbyid/{clinicId}", "Clinics:listByIdClinic");  
exemplo:
http://localhost/nutrium/api/clinics/listclbyid/1
  ````  [
    {
        "clinicId": 1,
        "clinicName": "troca",
        "clinicAdress": "rua teste 3",
        "clinicPhoneNumber": "1111111111"
    }
]
````
Parâmetros: $clinicId, $clinicName,$clinicAdress, $clinicPhoneNumber;


$route->post("/createclinic", "Clinics:createClinic");
exemplo:
{
    "type": "success",
    "message": "Clínica cadastrada com sucesso!"
}

Parâmetros: $clinicName,$clinicAdress, $clinicPhoneNumber;
    
$route->post("/updateclinic/{clinicId}", "Clinics:updateClinic");
exemplo:
http://localhost/nutrium/api/clinics/updateclinic/1
bool(true)

Parâmetros: $clinicName,$clinicAdress, $clinicPhoneNumber;
$route->delete("/removeclinic/{clinicId}", "Clinics:deleteClinic");    
exemplo:
````
array(1) {
    [
        "clinicId"
    ]=>
  string(2) "13"
}
{
    "type": "success",
    "message": "Clínica Excluida com sucesso!"
}
````

Parâmetros: $clinicId;


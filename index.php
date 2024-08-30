<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/contato", "Web:contact");
$route->get("/sobre", "Web:about");
$route->get("/localizacao", "Web:location");
$route->get("/faq", "Web:faq");
$route->get("/login", "Web:login");
$route->get("/cadastro", "Web:register");
$route->get("/ops/{errcode}", "Web:error");


$route->group("/app");
$route->get("/", "App:home");
$route->get("/contato", "App:contact");
$route->get("/sobre", "App:about");
$route->get("/perfil", "App:profile");
$route->get("/appointment", "App:appointment");
$route->get("/patient", "App:patient");
$route->get("/clinics", "App:clinics");
$route->get("/diets", "App:diets");
$route->get("/loginAdm", "App:loginAdm");


$route->group(null);
$route->group("/admin");
$route->get("/", "Admin:home");
$route->get("/appointmentList", "Admin:appointmentList");
$route->get("/dietList", "Admin:dietList");
$route->get("/clinicsList", "Admin:clinicsList");
$route->get("/userList", "Admin:userList");


$route->get("/", "Admin:home");
//$route->get("/cadastro-produtos", "Admin:products"); -- lembrar de mudar

$route->group(null);

$route->get("/ops/{errcode}", "Web:error");

//$route->group(null);

//$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();

$route->group(null);
$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
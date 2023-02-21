<?php
header("Access-Control-Allow-Origin:*");
header('Content-Type: application/json');
$data = array(
    array('firstname' => 'Samuli', 'lastname' => 'Pohjola', 'email' => 's.pohjola@oamk.fi'),
    array('firstname' => 'Timo', 'lastname' => 'Kuusinen', 'email' => 't.kuusinen@oamk.fi'),
    array('firstname' => 'Seppo', 'lastname' => 'Ismo', 'email' => 's.ismo@oamk.fi'),
    array('firstname' => 'Mikael', 'lastname' => 'Nilkkilä', 'email' => 'm.nilkkila@oamk.fi'),
    array('firstname' => 'Ossi', 'lastname' => 'Osteri', 'email' => 'o.osteri@oamk.fi'),
);
$json = json_encode($data, JSON_PRETTY_PRINT);
print $json;
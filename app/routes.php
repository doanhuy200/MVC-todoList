<?php

$router->get("", "WorkController@index");
$router->post("works/insert", "WorkController@store");
$router->post("works/delete", "WorkController@delete");
$router->get("works/show", "WorkController@show");
$router->post("works/edit", "WorkController@edit");

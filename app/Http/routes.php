<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$app->get('/', 'HomeController@index');

$app->get('/companies/type/{id}', 'HomeController@getCompaniesByType');

$app->get('/companies/jobs', 'HomeController@getCompaniesWithJobs');

$app->get('/companies', 'HomeController@getCompanies');

$app->post('/company/store', 'HomeController@store');

$app->post('/eats/store', 'HomeController@eatsStore');

$app->post('/person/store', 'HomeController@personStore');

$app->get('/search/{search}','HomeController@getBySearch');
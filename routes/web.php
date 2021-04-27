<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();




Route::get('/', function () {
    return view('/auth/login');
})->middleware('guest');





//admin : 

Route::group(['middleware' => ['can:access-admin']], function () {
    // Routes available to admin user only.


Route::get('/admin','Admin\AdminController@index');

Route::get('notifications','Admin\UserNotificationsController@show');

//admin_clients :

Route::get('/admin/clients', 'Admin\ClientsController@index');

Route::get('/admin/clients/create', 'Admin\ClientsController@create');

Route::post('/admin/clients/', 'Admin\ClientsController@store');

Route::get('admin/clients/{client}/profile','Admin\ClientsController@show_profile');

Route::get('admin/clients/{client}/profile/deactivate','Admin\ClientsController@deactivate_client');




//admin_companies :

Route::get('/admin/companies/', 'Admin\CompaniesController@index');

Route::get('/admin/companies/{company}', 'Admin\CompaniesController@show_info');

Route::get('/admin/companies/{company}/mof_ssn_address', 'Admin\MofSsnAddressController@show_mof_ssn_address');


Route::get('/admin/companies/{company}/lawyer', 'Admin\CompanyLawyerController@show');

Route::get('/admin/companies/{company}/files', 'Admin\CompanyFilesController@index_files');

Route::get('/admin/companies/{company}/employees', 'Admin\EmployeesController@index_single');

Route::get('/admin/companies/{company}/files/{id}/download', 'Admin\CompanyFilesController@download_files');


//admin_tools :
Route::get('/admin/tools/add_company_type', 'Admin\AdminToolsController@addCompanyType');

Route::post('/admin/tools/add_company_type', 'Admin\AdminToolsController@storeCompanyType');

Route::get('/admin/tools/add_company_type/{type}/delete', 'Admin\AdminToolsController@deleteCompanyType');

//admin_employees :
Route::get('/admin/employees', 'Admin\EmployeesController@index_all');
Route::get('/admin/employees/{employee}', 'Admin\EmployeesController@show_info');
Route::get('/admin/employees/{employee}/address', 'Admin\EmployeesController@show_address');
Route::get('/admin/employees/{employee}/spouse', 'Admin\EmployeeSpouseController@index_spouse');
Route::get('/admin/employees/{employee}/spouse/{spouse}', 'Admin\EmployeeSpouseController@show_spouse');
Route::get('/admin/employees/{employee}/child', 'Admin\EmployeeChildController@index_child');
Route::get('/admin/employees/{employee}/child/{child}', 'Admin\EmployeeChildController@show_child');
Route::get('/admin/employees/{employee}/oldwork', 'Admin\EmployeeOldworkController@index_oldwork');
Route::get('/admin/employees/{employee}/oldwork/{oldwork}', 'Admin\EmployeeOldworkController@show_oldwork');
Route::get('/admin/employees/{employee}/files', 'Admin\EmployeeFilesController@index_files');
Route::get('/admin/employees/{employee}/files/{id}/download', 'Admin\EmployeeFilesController@download_files');


//admin_tasks :
Route::get('/admin/tasks', 'Admin\AdminTasksController@index');
Route::post('/admin/tasks/create', 'Admin\AdminTasksController@store_task');


//admin_tasks_instance :
Route::get('/admin/tasks/{task}', 'Admin\AdminTasksInstancesController@show');
Route::post('/admin/tasks/{task}/create', 'Admin\AdminTasksInstancesController@store_instance');
Route::put('/admin/tasks/{task}/{instance}/end', 'Admin\AdminTasksInstancesController@end_instance');


});








//client :


Route::group(['middleware' => ['can:access-client']], function () {
    
    // Routes available to client user only.


Route::get('/client','Client\ClientController@index');

Route::get('/client/profile','Client\ClientController@show');

Route::get('/client/profile/edit','Client\ClientController@edit');

Route::put('/client/profile','Client\ClientController@update');

//client_companies :


Route::get('/client/companies/', 'Client\CompaniesController@index');

Route::post('/client/companies/', 'Client\CompaniesController@store_info');

Route::get('/client/companies/create', 'Client\CompaniesController@create_info');

Route::post('/client/companies/{company}/mof_ssn_address', 'Client\MofSsnAddressController@store_mof_ssn_address');

Route::get('/client/companies/{company}/mof_ssn_address/create', 'Client\MofSsnAddressController@create_mof_ssn_address');

Route::post('/client/companies/{company}/lawyer', 'Client\CompanyLawyerController@store');

Route::get('/client/companies/{company}/lawyer/create', 'Client\CompanyLawyerController@create');





Route::get('/client/companies/{company}/files/upload', 'Client\CompanyFilesController@before_upload_files');

Route::get('/client/companies/{company}/files/{id}/download', 'Client\CompanyFilesController@download_files');

Route::get('/client/companies/{company}/files/{id}/delete', 'Client\CompanyFilesController@delete_file');

Route::get('/client/companies/{company}/files/delete', 'Client\CompanyFilesController@delete_all_files');

Route::put('/client/companies/{company}/files/upload', 'Client\CompanyFilesController@upload_files');

Route::get('/client/companies/{company}/files/', 'Client\CompanyFilesController@index_files');






Route::get('/client/companies/{company}', 'Client\CompaniesController@show_info');

Route::get('/client/companies/{company}/edit', 'Client\CompaniesController@edit_info');

Route::put('/client/companies/{company}', 'Client\CompaniesController@update_info');






Route::get('/client/companies/{company}/mof_ssn_address', 'Client\MofSsnAddressController@show_mof_ssn_address');

Route::get('/client/companies/{company}/mof_ssn_address/edit', 'Client\MofSsnAddressController@edit_mof_ssn_address');

Route::put('/client/companies/{company}/mof_ssn_address', 'Client\MofSsnAddressController@update_mof_ssn_address');




Route::get('/client/companies/{company}/lawyer', 'Client\CompanyLawyerController@show');

Route::get('/client/companies/{company}/lawyer/edit', 'Client\CompanyLawyerController@edit');

Route::put('/client/companies/{company}/lawyer', 'Client\CompanyLawyerController@update');




//client_employees :



Route::get('/client/employees', 'Client\EmployeesController@index_all');

Route::post('/client/companies/{company}/employees', 'Client\EmployeesController@store_employee');

Route::get('/client/companies/{company}/employees', 'Client\EmployeesController@index_single');

Route::get('/client/companies/{company}/employees/create', 'Client\EmployeesController@create_employee');

Route::get('/client/companies/{company}/employees/{employee}', 'Client\EmployeesController@show_info');



Route::get('/client/companies/{company}/employees/{employee}/edit', 'Client\EmployeesController@edit_info');

Route::put('/client/companies/{company}/employees/{employee}', 'Client\EmployeesController@update_info');

Route::get('/client/companies/{company}/employees/{employee}/address', 'Client\EmployeesController@show_address');

Route::get('/client/companies/{company}/employees/{employee}/address/edit', 'Client\EmployeesController@edit_address');

Route::put('/client/companies/{company}/employees/{employee}/address', 'Client\EmployeesController@update_address');


Route::get('/client/companies/{company}/employees/{employee}/spouse', 'Client\EmployeeSpouseController@index_spouse');


Route::get('/client/companies/{company}/employees/{employee}/spouse/create', 'Client\EmployeeSpouseController@create_spouse');


Route::post('/client/companies/{company}/employees/{employee}/spouse/', 'Client\EmployeeSpouseController@store_spouse');


Route::get('/client/companies/{company}/employees/{employee}/spouse/{spouse}', 'Client\EmployeeSpouseController@show_spouse');



Route::get('/client/companies/{company}/employees/{employee}/spouse/{spouse}/edit', 'Client\EmployeeSpouseController@edit_spouse');



Route::put('/client/companies/{company}/employees/{employee}/spouse/{spouse}', 'Client\EmployeeSpouseController@update_spouse');







Route::get('/client/companies/{company}/employees/{employee}/child', 'Client\EmployeeChildController@index_child');


Route::get('/client/companies/{company}/employees/{employee}/child/create', 'Client\EmployeeChildController@create_child');


Route::post('/client/companies/{company}/employees/{employee}/child/', 'Client\EmployeeChildController@store_child');


Route::get('/client/companies/{company}/employees/{employee}/child/{child}', 'Client\EmployeeChildController@show_child');



Route::get('/client/companies/{company}/employees/{employee}/child/{child}/edit', 'Client\EmployeeChildController@edit_child');



Route::put('/client/companies/{company}/employees/{employee}/child/{child}', 'Client\EmployeeChildController@update_child');





Route::get('/client/companies/{company}/employees/{employee}/files/upload', 'Client\EmployeeFilesController@before_upload_files');

Route::get('/client/companies/{company}/employees/{employee}/files/{id}/download', 'Client\EmployeeFilesController@download_files');

Route::get('/client/companies/{company}/employees/{employee}/files/{id}/delete', 'Client\EmployeeFilesController@delete_file');

Route::get('/client/companies/{company}/employees/{employee}/files/delete', 'Client\EmployeeFilesController@delete_all_files');

Route::put('/client/companies/{company}/employees/{employee}/files/upload', 'Client\EmployeeFilesController@upload_files');

Route::get('/client/companies/{company}/employees/{employee}/files', 'Client\EmployeeFilesController@index_files');





Route::get('/client/companies/{company}/employees/{employee}/oldwork', 'Client\EmployeeOldworkController@index_oldwork');

Route::get('/client/companies/{company}/employees/{employee}/oldwork/create', 'Client\EmployeeOldworkController@create_oldwork');

Route::post('/client/companies/{company}/employees/{employee}/oldwork/', 'Client\EmployeeOldworkController@store_oldwork');

Route::get('/client/companies/{company}/employees/{employee}/oldwork/{oldwork}', 'Client\EmployeeOldworkController@show_oldwork');

Route::get('/client/companies/{company}/employees/{employee}/oldwork/{oldwork}/edit', 'Client\EmployeeOldworkController@edit_oldwork');

Route::put('/client/companies/{company}/employees/{employee}/oldwork/{oldwork}', 'Client\EmployeeOldworkController@update_oldwork');


});

// . 
// . 
// . 
// . 
// . 
// . 
// . 
// . 







//employee :


Route::group(['middleware' => ['can:access-employee']], function () {
    // Routes available to client user only.

Route::get('/employee','Employee\EmployeeController@show_info');

Route::get('/employee/profile','Employee\EmployeeController@show_profile');

Route::get('/employee/profile/edit','Employee\EmployeeController@edit_profile');

Route::put('/employee/profile','Employee\EmployeeController@update_profile');

Route::get('/employee/edit', 'Employee\EmployeeController@edit_info');

Route::put('/employee', 'Employee\EmployeeController@update_info');

Route::get('/employee/address', 'Employee\EmployeeController@show_address');

Route::get('/employee/address/edit', 'Employee\EmployeeController@edit_address');

Route::put('/employee/address', 'Employee\EmployeeController@update_address');


Route::get('/employee/spouse', 'Employee\EmployeeSpouseController@index_spouse');


Route::get('/employee/spouse/create', 'Employee\EmployeeSpouseController@create_spouse');


Route::post('/employee/spouse/', 'Employee\EmployeeSpouseController@store_spouse');


Route::get('/employee/spouse/{spouse}', 'Employee\EmployeeSpouseController@show_spouse');



Route::get('/employee/spouse/{spouse}/edit', 'Employee\EmployeeSpouseController@edit_spouse');



Route::put('/employee/spouse/{spouse}', 'Employee\EmployeeSpouseController@update_spouse');







Route::get('/employee/child', 'Employee\EmployeeChildController@index_child');


Route::get('/employee/child/create', 'Employee\EmployeeChildController@create_child');


Route::post('/employee/child', 'Employee\EmployeeChildController@store_child');


Route::get('/employee/child/{child}', 'Employee\EmployeeChildController@show_child');



Route::get('/employee/child/{child}/edit', 'Employee\EmployeeChildController@edit_child');



Route::put('/employee/child/{child}', 'Employee\EmployeeChildController@update_child');





Route::get('/employee/files/upload', 'Employee\EmployeeFilesController@before_upload_files');

Route::get('/employee/files/{id}/download', 'Employee\EmployeeFilesController@download_files');

Route::get('/employee/files/{id}/delete', 'Employee\EmployeeFilesController@delete_file');

Route::get('/employee/files/delete', 'Employee\EmployeeFilesController@delete_all_files');

Route::put('/employee/files/upload', 'Employee\EmployeeFilesController@upload_files');

Route::get('/employee/files', 'Employee\EmployeeFilesController@index_files');





Route::get('/employee/oldwork', 'Employee\EmployeeOldworkController@index_oldwork');

Route::get('/employee/oldwork/create', 'Employee\EmployeeOldworkController@create_oldwork');

Route::post('/employee/oldwork/', 'Employee\EmployeeOldworkController@store_oldwork');

Route::get('/employee/oldwork/{oldwork}', 'Employee\EmployeeOldworkController@show_oldwork');

Route::get('/employee/oldwork/{oldwork}/edit', 'Employee\EmployeeOldworkController@edit_oldwork');

Route::put('/employee/oldwork/{oldwork}', 'Employee\EmployeeOldworkController@update_oldwork');







});










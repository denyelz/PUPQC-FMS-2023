<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AcadHead\AcadHeadDashboardController;
use App\Http\Controllers\API\AcadHead\AcadHeadProfileController;
use App\Http\Controllers\API\AcadHead\AcadHeadRequirementsBinController;
use App\Http\Controllers\API\AcadHead\AcadHeadRequirementTypeController;
use App\Http\Controllers\API\AcadHead\AcadHeadActivitiesController;
use App\Http\Controllers\API\AcadHead\AcadHeadActivityTypeController;
use App\Http\Controllers\API\AcadHead\AcadHeadClassScheduleController;
use App\Http\Controllers\API\AcadHead\AcadHeadClassObservationController;
use App\Http\Controllers\API\AcadHead\AcadHeadReportsController;

use App\Http\Controllers\API\Admin\AdminAcademicRankController;
use App\Http\Controllers\API\Admin\AdminDesignationController;
use App\Http\Controllers\API\Admin\AdminFacultyTypeController;
use App\Http\Controllers\API\Admin\AdminNewUserController;
use App\Http\Controllers\API\Admin\AdminProgramsController;
use App\Http\Controllers\API\Admin\AdminRoleController;
use App\Http\Controllers\API\Admin\AdminSpecializationController;
use App\Http\Controllers\API\Admin\AdminSystemRoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

e.g.

Route::get('/', function () {
};

*/

/*
    For Academic Head Functionalities only, routing functions starts here:
*/

Route::get('/',[AcadHeadDashboardController::class, 'acadhead_dashboard']);
Route::get('/acadhead/acadhead_profile',[AcadHeadProfileController::class, 'acadhead_profile']);
Route::get('/acadhead/acadhead_reqbin',[AcadHeadRequirementsBinController::class, 'acadhead_reqbin']);
Route::get('/acadhead/acadhead_reqtype',[AcadHeadRequirementTypeController::class, 'acadhead_reqtype']);
Route::get('/acadhead/acadhead_activities',[AcadHeadActivitiesController::class, 'acadhead_activities']);
Route::get('/acadhead/acadhead_acttype', [AcadHeadActivityTypeController::class, 'acadhead_acttype']);
Route::get('/acadhead/acadhead_classsched', [AcadHeadClassScheduleController::class, 'acadhead_classsched']);
Route::get('/acadhead/acadhead_classobserve', [AcadHeadClassObservationController::class, 'acadhead_classobserve']);
Route::get('/acadhead/acadhead_reports', [AcadHeadReportsController::class, 'acadhead_reports']);

Route::get('/admin/acadhead_acadrank', [AdminAcademicRankController::class, 'acadhead_acadrank']);
Route::get('/admin/acadhead_designation', [AdminDesignationController ::class, 'acadhead_designation']);
Route::get('/admin/acadhead_facultytype', [AdminFacultyTypeController ::class, 'acadhead_facultytype']);
Route::get('/admin/acadhead_newuser', [AdminNewUserController ::class, 'acadhead_newuser']);
Route::get('/admin/acadhead_programs', [AdminProgramsController ::class, 'acadhead_programs']);
Route::get('/admin/acadhead_role', [AdminRoleController ::class, 'acadhead_role']);
Route::get('/admin/acadhead_specialization', [AdminSpecializationController ::class, 'acadhead_specialization']);
Route::get('/admin/acadhead_systemrole', [AdminSystemRoleController ::class, 'acadhead_systemrole']);

/*
    For Academic Head Functionalities only, routing functions ends here:
*/

/*
    For Staff functionalities only, routing functions starts here:
*/

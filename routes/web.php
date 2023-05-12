<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Blanks\GreenBlankController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('blanks');
})->name('welcome');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::middleware(['consent_to_the_collection_of_personal_data'])->group(function () {
        Route::get('/blanks', function () {
            return view('blanks');
        })->name('blanks');

        Route::name('green-blank.')->prefix('green-blank')->group(function () {
            Route::get('/index', [GreenBlankController::class, 'index'])->name('index');
    
            Route::get('/application', [GreenBlankController::class, 'application'])->name('application');
            Route::post('/application', [GreenBlankController::class, 'saveApplication'])->name('save-application');
            
            Route::get('/personal', [GreenBlankController::class, 'personal'])->name('personal');
            Route::post('/personal', [GreenBlankController::class, 'savePersonal'])->name('save-personal');
            
            Route::get('/passport', [GreenBlankController::class, 'passport'])->name('passport');
            Route::post('/passport', [GreenBlankController::class, 'savePassport'])->name('save-passport');
            
            Route::get('/education-occupation', [GreenBlankController::class, 'educationOccupation'])->name('education-occupation');
            Route::post('/education-occupation', [GreenBlankController::class, 'saveEducationOccupation'])->name('save-education-occupation');
            
            Route::get('/employment-before-arrival', [GreenBlankController::class, 'employmentBeforeArrival'])->name('employment-before-arrival');
            Route::post('/employment-before-arrival', [GreenBlankController::class, 'saveEmploymentBeforeArrival'])->name('save-employment-before-arrival');
            
            Route::get('/employment-after-arrival', [GreenBlankController::class, 'employmentAfterArrival'])->name('employment-after-arrival');
            Route::post('/employment-after-arrival', [GreenBlankController::class, 'saveEmploymentAfterArrival'])->name('save-employment-after-arrival');
            
            Route::get('/last-residence-abroad', [GreenBlankController::class, 'lastResidenceAbroad'])->name('last-residence-abroad');
            Route::post('/last-residence-abroad', [GreenBlankController::class, 'saveLastResidenceAbroad'])->name('save-last-residence-abroad');
            
            Route::get('/previous-stay-in-cz', [GreenBlankController::class, 'previousStayInCz'])->name('previous-stay-in-cz');
            Route::post('/previous-stay-in-cz', [GreenBlankController::class, 'savePreviousStayInCz'])->name('save-previous-stay-in-cz');
    
            Route::get('/residence-address', [GreenBlankController::class, 'residenceAddress'])->name('residence-address');
            Route::post('/residence-address', [GreenBlankController::class, 'saveResidenceAddress'])->name('save-residence-address');
            
            Route::get('/delivery-address', [GreenBlankController::class, 'deliveryAddress'])->name('delivery-address');
            Route::post('/delivery-address', [GreenBlankController::class, 'saveDeliveryAddress'])->name('save-delivery-address');
            
            Route::get('/spouse', [GreenBlankController::class, 'spouse'])->name('spouse');
            Route::post('/spouse', [GreenBlankController::class, 'saveSpouse'])->name('save-spouse');
            
            Route::get('/children', [GreenBlankController::class, 'children'])->name('children');
            Route::post('/children', [GreenBlankController::class, 'saveChildren'])->name('save-children');
            
            Route::get('/mother', [GreenBlankController::class, 'mother'])->name('mother');
            Route::post('/mother', [GreenBlankController::class, 'saveMother'])->name('save-mother');
            
            Route::get('/father', [GreenBlankController::class, 'father'])->name('father');
            Route::post('/father', [GreenBlankController::class, 'saveFather'])->name('save-father');
            
            Route::get('/siblings', [GreenBlankController::class, 'siblings'])->name('siblings');
            Route::post('/siblings', [GreenBlankController::class, 'saveSiblings'])->name('save-siblings');
    
            Route::get('/additional', [GreenBlankController::class, 'additional'])->name('additional');
            Route::post('/additional', [GreenBlankController::class, 'saveAdditional'])->name('save-additional');
    
            Route::get('/done', [GreenBlankController::class, 'done'])->name('done');
    
            Route::get('/pdf-empty', [GreenBlankController::class, 'pdfEmpty'])->name('pdf-empty');
            Route::get('/pdf-show', [GreenBlankController::class, 'pdfShow'])->name('pdf-show');
            Route::get('/pdf-download', [GreenBlankController::class, 'pdfDownload'])->name('pdf-download');
        });
    });
    
});

require __DIR__.'/auth.php';

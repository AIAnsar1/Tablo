<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\{
    CountryController,
    EmailVerificationController,
    UserController,
    AddressesController,
    AdvertisementsController,
    BansController,
    CategoryController,
    FavoritesController,
    FiltersController,
    FilterValuesController,
    ImageController,
    LogsController,
    MessagesController,
    PaymentsController,
    ReviewsController,
};
use App\Http\Middleware\CanRolePermissions;
use App\Http\Middleware\RBAC;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::prefix('/auth')->group( function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/reset-password', [AuthController::class, 'resetPassword']);
    Route::post('/check-user-token', [AuthController::class, 'checkUserToken']);
    Route::post('/update-your-self', [AuthController::class, 'updateYourself']);
})->middleware(['auth:api', RBAC::class]);


Route::post('/email-verification', [EmailVerificationController::class, 'sendEmailVerification']);
Route::post('/check-email-verification', [EmailVerificationController::class, 'checkEmailVerification']);



Route::prefix('/application')->group( function (): void {
    Route::apiResource('/countries', CountryController::class);
    Route::apiResource('/addresses', AddressesController::class);
})->middleware(['auth:api', RBAC::class]);

Route::apiResource('/application/users', UserController::class);




Route::prefix('tablo')->group( function () {
    Route::apiResource('/advertisements', AdvertisementsController::class);
    // Route::apiResource('/bans', BansController::class);
    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/favorites', FavoritesController::class);
    Route::apiResource('/filter', FiltersController::class);
    Route::apiResource('/filter-values', FilterValuesController::class);
    Route::apiResource('/images', ImageController::class);
    // Route::apiResource('/logs', LogsController::class);
    Route::apiResource('/messages', MessagesController::class);
    Route::apiResource('/payments', PaymentsController::class);
    Route::apiResource('/reviews', ReviewsController::class);
});


Route::prefix('admin-moderators')->group( function() {
    Route::apiResource('/logs', LogsController::class);
    Route::apiResource('/bans', BansController::class);
});































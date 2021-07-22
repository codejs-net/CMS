<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SoapController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Web\TranslationController;
use App\Http\Controllers\Web\NavigationController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\PostController;





Auth::routes();

Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');
// Route::resource('login', LoginController::class);
// Route::get('login', [LoginController::class, 'index'])->name('login');

// --------Web--------------------------------
Route::get('/', [WebController::class, 'index'])->name('/');
Route::get('home', [WebController::class, 'index'])->name('home');
Route::get('page/{id}', [WebController::class, 'page'])->name('page');
Route::get('post/{id}', [WebController::class, 'post'])->name('post');

Route::group(['middleware' => ['auth']], function() {

    // --------CMS---------------------------------
    Route::resource('translation', TranslationController::class);
    Route::get('import_translation', [TranslationController::class, 'import_translation'])->name('import_translation');
    Route::get('publish_tranlation', [TranslationController::class, 'publish_tranlation'])->name('publish_tranlation');

    Route::resource('navigations', NavigationController::class);
    Route::POST('add_menu_item', [NavigationController::class, 'add_menu_item'])->name('add_menu_item');
    Route::get('load_menu_item', [NavigationController::class, 'load_menu_item'])->name('load_menu_item');
    Route::POST('save_menu', [NavigationController::class, 'save_menu'])->name('save_menu');

    Route::resource('pages', PageController::class);

    Route::resource('posts', PostController::class);

    // --------Home--------------------------------
    Route::get('cms-admin', [HomeController::class, 'index'])->name('cms-admin');
    Route::get('backup_db', [HomeController::class, 'backup_db'])->name('backup_db');
    // --------Roles--------------------------------
    Route::resource('roles', RoleController::class);
    Route::post('delete_roles', [RoleController::class, 'delete'])->name('delete_roles');
    
    // --------User--------------------------------
    Route::resource('users', UserController::class);
    Route::get('my_account', [UserController::class, 'my_account'])->name('my_account');
    Route::get('edit_users/{id}', [UserController::class, 'edit_users'])->name('edit_users');
    Route::get('show_users/{id}', [UserController::class, 'show_users'])->name('show_users');
    Route::get('create_users', [UserController::class, 'create_users'])->name('create_users');
    Route::post('store_users', [UserController::class, 'store_users'])->name('store_users');
    Route::post('update_users', [UserController::class, 'update_users'])->name('update_users');

   

    Route::post('update_my_account', [UserController::class, 'update_my_account'])->name('update_my_account');

    Route::post('pw_reset', [UserController::class, 'pw_reset'])->name('pw_reset');
    Route::post('delete_users', [UserController::class, 'delete'])->name('delete_users');
    
    // -------Settings--------------------------
    Route::get('lms_setting', [SettingController::class, 'lms_setting'])->name('lms_setting');
    Route::get('basic_setting', [SettingController::class, 'basic_setting'])->name('basic_setting');
    Route::get('lending_setting', [SettingController::class, 'lending_setting'])->name('lending_setting');
    Route::get('notification_setting', [SettingController::class, 'notification_setting'])->name('notification_setting');
    Route::post('update_theme', [SettingController::class, 'update_theme'])->name('update_theme');
    Route::get('change_theme/{id}', [SettingController::class, 'change_theme'])->name('change_theme');
    Route::post('update_library', [SettingController::class, 'update_library'])->name('update_library');
    Route::post('update_db_locale', [SettingController::class, 'update_db_locale'])->name('update_db_locale');
    Route::post('update_locale', [SettingController::class, 'update_locale'])->name('update_locale');
    Route::post('update_sms_option', [SettingController::class, 'update_sms_option'])->name('update_sms_option');
    Route::post('update_email_option', [SettingController::class, 'update_email_option'])->name('update_email_option');
    Route::post('update_email_backup', [SettingController::class, 'update_email_backup'])->name('update_email_backup');
    Route::post('update_lending_config', [SettingController::class, 'update_lending_config'])->name('update_lending_config');
    Route::post('update_fine', [SettingController::class, 'update_fine'])->name('update_fine');
    Route::post('update_period', [SettingController::class, 'update_period'])->name('update_period');
    Route::post('update_limit', [SettingController::class, 'update_limit'])->name('update_limit');

   
    //  ---------Email-------------
    Route::get('sendbasicemail', [MailController::class, 'basic_email'])->name('sendbasicemail');
    Route::get('sendhtmlemail', [MailController::class, 'html_email'])->name('sendhtmlemail');
    Route::get('sendattachmentemail', [MailController::class, 'attachment_email'])->name('sendattachmentemail');

});

Route::get('/sms', [SoapController::class, 'msg_test'])->name('msg_test');



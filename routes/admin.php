<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\RfqController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\PreOrderController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\Admin\WareHouseController;
use App\Http\Controllers\Admin\ClientTypeController;
use App\Http\Controllers\Admin\EntityTypeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PreBookingController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\Admin\NewPasswordController;
use App\Http\Controllers\Admin\PickUpPointController;
use App\Http\Controllers\Admin\ProfileTypeController;
use App\Http\Controllers\Admin\VerifyEmailController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\ProductDraftController;
use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\FilteringItemController;
use App\Http\Controllers\Admin\IndustryWatchController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\BillingAddressController;
use App\Http\Controllers\Admin\IndustrySectorController;
use App\Http\Controllers\Admin\GroupPermissionController;
use App\Http\Controllers\Admin\ShippingAddressController;
use App\Http\Controllers\Admin\TransactionTypeController;
use App\Http\Controllers\Admin\PasswordResetLinkController;
use App\Http\Controllers\Admin\ClientTypeCategoryController;
use App\Http\Controllers\Admin\EmployeePermissionController;
use App\Http\Controllers\Admin\ConfirmablePasswordController;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\IndustryWatchCategoryController;
use App\Http\Controllers\Admin\EmailVerificationPromptController;
use App\Http\Controllers\Admin\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\FrontendMenuController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\SubscriptionPlanController;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    //all categories routes
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('categories', [CategoryController::class, 'categoryStore'])->name('categories.store');
    Route::put('categories/{id}', [CategoryController::class, 'categoryUpdate'])->name('categories.update');
    Route::delete('categories/{id}', [CategoryController::class, 'categoryDestroy'])->name('categories.destroy');

    Route::post('sub/categories', [CategoryController::class, 'subCategoryStore'])->name('sub.categories.store');
    Route::put('sub/categories/{id}', [CategoryController::class, 'subCategoryUpdate'])->name('sub.categories.update');
    Route::delete('sub/categories/{id}', [CategoryController::class, 'subCategoryDestroy'])->name('sub.categories.destroy');
    Route::get('sub/categories/dropdown', [CategoryController::class, 'subCategoryDropdown'])->name('sub.categories.dropdown');

    Route::post('child/categories', [CategoryController::class, 'childCategoryStore'])->name('child.categories.store');
    Route::put('child/categories/{id}', [CategoryController::class, 'childCategoryUpdate'])->name('child.categories.update');
    Route::delete('child/categories/{id}', [CategoryController::class, 'childCategoryDestroy'])->name('child.categories.destroy');
    Route::get('child/categories/dropdown', [CategoryController::class, 'childCategoryDropdown'])->name('child.categories.dropdown');

    //Product Multiimage
    Route::post('multi-image/store', [ProductController::class, 'multiImageStore'])->name('multi-image.store');
    Route::get('multi-image/update', [ProductController::class, 'multiImageUpdate'])->name('multi-image.update');

    Route::get('web-setting', [WebSettingController::class, 'index'])->name('web.setting.index');
    Route::put('seo/setting', [WebSettingController::class, 'seo'])->name('seo.setting');
    Route::put('smtp/setting', [WebSettingController::class, 'smtp'])->name('smtp.setting');
    Route::put('site/setting', [WebSettingController::class, 'site'])->name('site.setting');

    Route::resources([
        'profile_type'              => ProfileTypeController::class,
        'client_type_category'      => ClientTypeCategoryController::class,
        'client_type'               => ClientTypeController::class,
        'transaction_type'          => TransactionTypeController::class,
        'entity_type'               => EntityTypeController::class,

        'brand'                     => BrandController::class,
        'group-permission'          => GroupPermissionController::class,
        'permission'                => PermissionController::class,
        'role'                      => RoleController::class,
        'payment-method'            => PaymentMethodController::class,
        'product'                   => ProductController::class,
        'coupon'                    => CouponController::class,
        'advertisement'             => AdvertisementController::class,
        'filtering-item'            => FilteringItemController::class,
        'review'                    => ReviewController::class,
        'employee'                  => EmployeePermissionController::class,
        'rfq'                       => RfqController::class,
        'contact'                   => ContactController::class,
        'feedback'                  => FeedbackController::class,
        'pre-order'                 => PreOrderController::class,
        'pre-booking'               => PreBookingController::class,
        'order'                     => OrderController::class,
        'order-item'                => OrderItemController::class,
        'billing-address'           => BillingAddressController::class,
        'shipping-address'          => ShippingAddressController::class,
        'product-draft'             => ProductDraftController::class,
        'profile'                   => ProfileController::class,
        'industrial-sector'         => IndustrySectorController::class,
        'industry'                  => IndustryController::class,
        'industry-watch-category'   => IndustryWatchCategoryController::class,
        'industry-watch'            => IndustryWatchController::class,
        'blog-category'             => BlogCategoryController::class,
        'blog-post'                 => BlogPostController::class,
        'faq'                       => FaqController::class,
        'frontend-menu'             => FrontendMenuController::class,
        'subscription'              => SubscriptionController::class,
        'subscription-plan'         => SubscriptionPlanController::class,
    ], [
        'except' => ['brand',  'create', 'show', 'edit'],
        'except' => ['profile_type',  'create', 'show', 'edit'],
        'except' => ['group-permission',  'create', 'show', 'edit'],
        'except' => ['employee', 'create', 'show', 'edit'],
        'except' => ['payment-method',  'create', 'show', 'edit'],
        'except' => ['coupon', 'create', 'show', 'edit'],
        'except' => ['advertisement',  'create', 'show', 'edit'],
        'except' => ['filtering-item', 'show'],
    ]);
});

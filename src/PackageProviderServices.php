<?php

namespace Mr\Hoang;

use Illuminate\Support\ServiceProvider;

class PackageProviderServices extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        // nạp routes
        include __DIR__ . "/routes.php";

        $this->loadViewsFrom(__DIR__ . "/views", "package");
        // function chia sẻ view cho không gian tên .
        // tham số 2 tự đặt
        // tham số một là thư mục chia sẻ.

        $this->publishes([
        __DIR__ . "/views" => resource_path()."/views/mr/package/",
        ]);
        // tham số 1 mục được sao chép
        // tham số 2 mục dán đến
        // chạy lệnh xuất bản  composer.
        // vì đây là một mảng nên 
        // chỉnh sửa lại file
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}

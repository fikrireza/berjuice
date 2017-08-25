<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App;
use Auth;
use DB;
use Route;
use Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(!Request::is('admin/*')){
            $ftSosmedArrIcon = [
                'logofb',
                'logoinstag',
                'logotwit'
            ];
            view()->share('ftSosmedArrIcon', $ftSosmedArrIcon);
            $ftSosmedArrUrl = [
                'https://www.facebook.com/Juiceunited/',
                'https://www.instagram.com/Juiceunited/',
                'https://twitter.com/Juiceunited/'
            ];
            view()->share('ftSosmedArrUrl', $ftSosmedArrUrl);
            $navProdDropDownName = [
                'Freshly Squeezed',
                'Premium Chilled',
                'Daily Juice',
                'Vittoria Coffee',
                'Espressotoria Machine'
            ];
            view()->share('navProdDropDownName', $navProdDropDownName);
            $navProdDropDownUrl = [
                'frontend.product.view.freshly-squeezed',
                'frontend.product.view.premium-chilled',
                'frontend.product.view.daily-juice',
                'frontend.product.view.victtoria-coffe',
                'frontend.product.view.espressotoria-machine'
            ];
            view()->share('navProdDropDownUrl', $navProdDropDownUrl);
            $branchesTitle = [
                'Head Office', 
                'Bali', 
                'Surabaya', 
                'Bandung'
            ];
            view()->share('branchesTitle', $branchesTitle);
            $branchesAdr    = [
                'Jl. MH. Thamrin, Komp. Mahkota Mas Blok J No. 61 Cikokol - Tangerang 15117, Indonesia', 
                'Jl. Dharmawangsa No. 18 Kampial, Nusa Dua Bali 80383, Indonesia', 
                'Ruko Rungkut Megah Raya Jl. Kalirungkut No. 6 ', 
                'Bizzpark Commercial Estate Jl. Kopo No. 455, Blok AA6 No. 16 Kopo - Bandung 40227'
            ];
            view()->share('branchesAdr', $branchesAdr);
            $branchesTel = [
                '(62-21) 554 3050, 554 3056', 
                '(62-361) 774 707, 774 706, 774 705, 774 702', 
                '(62-31) 870 9229, 872 0843', 
                '(62-22) 8888 6781'
            ];
            view()->share('branchesTel', $branchesTel);
            $branchesFax = [
                '(62-21) 554 3057, 554 3058', 
                '(62-361) 774 704', 
                '(62-31) 879 8589', 
                '(62-22) 8888 6782'
            ];
            view()->share('branchesFax', $branchesFax);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

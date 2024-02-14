<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class LayoutDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.partials.header', function ($view) {
            $headerData = [
                'logo' => '/assets/img/logo/logo-black.png',
                'pages' => [
                    'about' => 'components/header.About',
                    'contact' => 'components/header.Contact',
                    'checkout' => 'components/header.Checkout',
                    'faq' => 'components/header.FAQ',
                    'register' => 'components/header.Register',
                    'sign-in' => 'components/header.Signin',
                ],
                'instructor' => 'components/header.Instructors',
                'course-grid' => 'components/header.Courses',
                'blog' => 'components/header.LatestBlogs',
            ];
            $view->with('headerData', $headerData);
        });

        View::composer('layouts.partials.footer', function ($view) {
            $footerData = [
                'socialLinks' => [
                    'facebook' => 'https://www.facebook.com/Laravel',
                    'youtube' => 'https://www.youtube.com/Laravel',
                    'twitter' => 'https://twitter.com/laravelphp',
                    'laravel' => 'https://www.laravel.com',
                ],
                'copyRights' => 'Uxaction© 2022, All Rights Reserved',
                'logo' => '/assets/img/logo/logo.png',
            ];
            $view->with('footerData', $footerData);
        });
    }
}

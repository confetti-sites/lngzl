<?php

declare(strict_types=1);

namespace App\Http\Routes;

use App\Http\Entity\View;

/**
 * Here you define your website routes.
 * Feel free to modify this class to suit your needs.
 * You can even replace the match statement with a Symfony router,
 * or the standalone router of Laravel Illuminate Router.
 *
 * Other routes to match?
 * Create a new class and register it in App/Bootstrap/Bootstrap.php
 */
class Website
{
    public static function canRender(): bool
    {
        return true;
    }

    public static function render(): View
    {
        return match (true) {
            request()->uri() === '/'                         => new View('website.homepage.homepage'),
            request()->uri() === '/auth/callback'            => new View('website.includes.auth.callback'),
            request()->uri() === '/diensten'                 => new View('website.services.services'),
            request()->uri() === '/contact'                  => new View('website.contact.contact'),
            request()->uri() === '/privacy-policy'           => new View('website.privacy-policy.privacy-policy'),
            request()->uri() === '/projecten'                => new View('website.projects.overview'),
            str_starts_with(request()->uri(), '/projecten/') => new View('website.projects.detail'),
            default                                          => new View('website.404'),
        };
    }
}

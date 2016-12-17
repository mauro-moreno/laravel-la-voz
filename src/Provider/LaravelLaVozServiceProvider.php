<?php
/*
 * This file is part of the Laravel La Voz Feed Generator package.
 *
 * (c) Zephia <info@zephia.com.ar>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephia\LaravelLaVoz\Provider;

use Illuminate\Support\ServiceProvider;
use JMS\Serializer\SerializerBuilder;
use Zephia\LaVozFeed\Document;

/**
 * Class LaravelLaVozServiceProvider
 *
 * @package Zephia\LaravelLaVoz\Provider
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class LaravelLaVozServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the La Voz service.
     *
     */
    public function boot()
    {
        $this->app->bind('la-voz', function () {
            $serializer = SerializerBuilder::create()
                ->addMetadataDir(
                    base_path('vendor/zephia/la-voz/resources/config/serializer')
                )->build();
            return new Document($serializer);
        });
    }

    /**
     * Register the La Voz service.
     */
    public function register()
    {
    }
}
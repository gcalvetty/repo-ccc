<?php
namespace sis_ccc\Providers;
use Collective\Html\HtmlServiceProvider as CSP;
use sis_ccc\ComponentesCCC\HtmlBuilder;

class HtmlProviderCCC extends CSP{
	/**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app['url'], $app['view']);
        });
    }

}
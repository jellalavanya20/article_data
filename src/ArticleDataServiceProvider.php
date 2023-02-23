<?php
namespace Newindianic\ArticleData;

use Newindianic\ArticleData\Nova\Resources\Article;
use Newindianic\ArticleData\Nova\Resources\Comment;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ArticleDataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::resources([
                Article::class,
            ]);
        });

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}

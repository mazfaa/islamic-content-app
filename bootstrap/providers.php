<?php

return [
  App\Providers\AppServiceProvider::class,
  Laravel\Socialite\SocialiteServiceProvider::class,
  \App\Http\Middleware\GoogleAnalytics::class,
];

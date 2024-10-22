<?php

function localizeUrl($url)
{
    app()->getLocale() != config('app.locale') ? url(app()->getLocale() . '/' . $url) : url($url);
}

function getLocaleUrl($url)
{
    return app()->getLocale() == config('app.fallback_locale') ? url($url) : url(app()->getLocale() . '/' .  $url);
}
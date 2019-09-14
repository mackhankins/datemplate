<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// series
Breadcrumbs::for('series', function ($trail) {
    $trail->parent('home');
    $trail->push('Series', route('series'));
});

<?php // routes/web.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\News;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('მთავარი', route('home'));
});

// Home > Login
Breadcrumbs::for('login-form', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('შესვლა', route('login-form'));
});

Breadcrumbs::for('register-form', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('რეგისტრაცია', route('register-form'));
});


Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('ჩვენს შესახებ', route('about'));
});

Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('კონტაქტი', route('contact'));
});

Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('პროფილი', route('profile'));
});


Breadcrumbs::for('news-index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('სიახლეები', route('news-index'));
});

Breadcrumbs::for('news-show', function (BreadcrumbTrail $trail, News $news) {
    $trail->parent('home');
    $trail->push('სიახლეები', route('news-show', $news));
});

<?php
// шаблонна заявка => път за нейната обработка
return array(
    'admin/news' => 'adminNews/index',
    // $ 1 е препратка към първия регулярен израз ([0-9]+)
    'admin/update/([0-9]+)' => 'adminNews/update/$1', 
    'admin/delete/([0-9]+)' => 'adminNews/delete/$1',
    'admin/greate' => 'adminNews/greate',
    // Показване на една новина по индификатор
    'news/([0-9]+)' => 'news/index/$1',
    //Показване на списък с всички новини
    'news' => 'news/list',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'dashboard' => 'dashboard/index',
    'admin' => 'admin/index',
    '' => 'news/home',
    '/' => 'news/home'
);


<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});


// Home > Country
Breadcrumbs::register('project', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(Lang::get("general.Projects"), route('project.index'));
});

Breadcrumbs::register('project.edit', function($breadcrumbs, $project = null)
{
    $breadcrumbs->parent('project');
    if(isset($project)) {
        $breadcrumbs->push($project->name, route('project.edit', $project->id));
    }
    else {
        $breadcrumbs->push(Lang::get("general.New"), route('project.edit'));
    }  
});

// Home > USer
Breadcrumbs::register('user', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(Lang::get("general.Users"), route('user.index'));
});


// Home > Car
Breadcrumbs::register('car', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(Lang::get("general.Cars"), route('car.index'));
});


// Home > Room
Breadcrumbs::register('room', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(Lang::get("general.Rooms"), route('room.index'));
});
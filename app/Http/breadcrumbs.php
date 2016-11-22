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

Breadcrumbs::register('project.resources', function($breadcrumbs, $project = null)
{
    $breadcrumbs->parent('project.show', $project);
    $breadcrumbs->push(Lang::get("general.Resources"), route('project.resources', $project->id));
});

Breadcrumbs::register('project.show', function($breadcrumbs, $project = null)
{
    $breadcrumbs->parent('project');
    $breadcrumbs->push($project->name, route('project.show', $project->id));   
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

Breadcrumbs::register('user.edit', function($breadcrumbs, $project = null)
{
    $breadcrumbs->parent('user');
    if(isset($project)) {
        $breadcrumbs->push($project->name, route('user.edit', $project->id));
    }
    else {
        $breadcrumbs->push(Lang::get("general.New"), route('user.edit'));
    }  
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


// Home > Room
Breadcrumbs::register('companytype', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(Lang::get("general.CompanyType"), route('companytype.index'));
});
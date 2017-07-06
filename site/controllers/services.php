<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'name' => [],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'phone' => [],
        'date' => [],

    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'andy@coupleofcreatives.com',
            'from' => 'alyssa@endylssdesigns.com',
        ]);
    }

    return compact('form');
};
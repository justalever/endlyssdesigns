<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'name' => [
            'rules' => ['required']
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        // 'reason' => [],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'andy@coupleofcreatives.com',
            'from' => 'alyssa@endlyssdesigns.com',
            'subject' => 'New inquiry from {name}',
        ]);
    }

    return compact('form');
};
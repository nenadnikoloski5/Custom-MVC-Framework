<?php

// The htaccess file routes to index.php by default
Router::set('index.php', function(){
    Home::view('home');

    // Collection Examples
    // About::seed();
    // About::all();
    // About::orderBy('users', 'name', 'john', 'age', 'DESC');
});

Router::set('about', function(){
    About::view('about');
});

Router::set('contact', function(){
    Contact::view('contact');
});


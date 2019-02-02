# A custom MVC, Laravel-Like Framework written in PHP

I'm a fan of Laravel so I tried creating something like it, albeit it's <i> quite </i> small.

Features:
  - Routing
  - Model Collections like Laravel
  - Database Seeding

<br>

  # Routing example
  
    Router::set('about', function(){
    About::view('about');
    });

# Collection Examples

    Router::set('index.php', function(){
    Home::view('home');
    // Collection Examples
    // About::seed();
    // About::all();
    // About::orderBy('users', 'name', 'john', 'age', 'DESC');
    // About::where('users', 'age', 22);
    // About::insert('users', 'someName', 20);
    });

# Seeding

    Router::set('index.php', function(){
    Home::view('home');
    
    // It inserts testing data into the database, it expects a name and age column
    About::seed();
    });
    
  <br>
    
 # How to install:
 
  - Enable mod re-write for XAMPP ( You can find a tutorial here https://www.phpflow.com/php/how-to-enable-mod_rewrite-module-in-apache/)
  - In the classes/Database.php file, change the database variables
  - Create a table called "users" with "name" and "age" column
  
  
The default route is index.php because of the .htaccess file, you can create new routes but you need to create a Views file with a new controllers file

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7432d96a1c5b7e1ed05b47450187f0bd
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyBarter\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyBarter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/MyBarter',
        ),
    );

    public static $classMap = array (
        'MyBarter\\controllers\\AboutController' => __DIR__ . '/../..' . '/app/MyBarter/controllers/AboutController.php',
        'MyBarter\\controllers\\CategoriesController' => __DIR__ . '/../..' . '/app/MyBarter/controllers/CategoriesController.php',
        'MyBarter\\controllers\\ContactsController' => __DIR__ . '/../..' . '/app/MyBarter/controllers/ContactsController.php',
        'MyBarter\\controllers\\MessagesController' => __DIR__ . '/../..' . '/app/MyBarter/controllers/MessagesController.php',
        'MyBarter\\controllers\\UsersController' => __DIR__ . '/../..' . '/app/MyBarter/controllers/UsersController.php',
        'MyBarter\\lib\\AdForm' => __DIR__ . '/../..' . '/app/MyBarter/lib/AdForm.php',
        'MyBarter\\lib\\App' => __DIR__ . '/../..' . '/app/MyBarter/lib/App.php',
        'MyBarter\\lib\\Button' => __DIR__ . '/../..' . '/app/MyBarter/lib/Button.php',
        'MyBarter\\lib\\Config' => __DIR__ . '/../..' . '/app/MyBarter/lib/Config.php',
        'MyBarter\\lib\\ContactForm' => __DIR__ . '/../..' . '/app/MyBarter/lib/ContactForm.php',
        'MyBarter\\lib\\Controller' => __DIR__ . '/../..' . '/app/MyBarter/lib/Controller.php',
        'MyBarter\\lib\\DB' => __DIR__ . '/../..' . '/app/MyBarter/lib/DB.php',
        'MyBarter\\lib\\Form' => __DIR__ . '/../..' . '/app/MyBarter/lib/Form.php',
        'MyBarter\\lib\\LoginForm' => __DIR__ . '/../..' . '/app/MyBarter/lib/LoginForm.php',
        'MyBarter\\lib\\Mail' => __DIR__ . '/../..' . '/app/MyBarter/lib/Mail.php',
        'MyBarter\\lib\\Model' => __DIR__ . '/../..' . '/app/MyBarter/lib/Model.php',
        'MyBarter\\lib\\Pagination' => __DIR__ . '/../..' . '/app/MyBarter/lib/Pagination.php',
        'MyBarter\\lib\\Password' => __DIR__ . '/../..' . '/app/MyBarter/lib/Password.php',
        'MyBarter\\lib\\RegistrationForm' => __DIR__ . '/../..' . '/app/MyBarter/lib/RegistrationForm.php',
        'MyBarter\\lib\\Router' => __DIR__ . '/../..' . '/app/MyBarter/lib/Router.php',
        'MyBarter\\lib\\Session' => __DIR__ . '/../..' . '/app/MyBarter/lib/Session.php',
        'MyBarter\\lib\\View' => __DIR__ . '/../..' . '/app/MyBarter/lib/View.php',
        'MyBarter\\models\\Category' => __DIR__ . '/../..' . '/app/MyBarter/models/Category.php',
        'MyBarter\\models\\Contact' => __DIR__ . '/../..' . '/app/MyBarter/models/Contact.php',
        'MyBarter\\models\\Message' => __DIR__ . '/../..' . '/app/MyBarter/models/Message.php',
        'MyBarter\\models\\User' => __DIR__ . '/../..' . '/app/MyBarter/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7432d96a1c5b7e1ed05b47450187f0bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7432d96a1c5b7e1ed05b47450187f0bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7432d96a1c5b7e1ed05b47450187f0bd::$classMap;

        }, null, ClassLoader::class);
    }
}

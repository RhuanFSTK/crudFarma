<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita03377e4e64b62de42470e3f3f64e755
{
    public static $files = array (
        'b7f3239856b44b12a7c6f4d050ea2263' => __DIR__ . '/../..' . '/app/database/conexao.php',
        '0b3e7a0fcf37d4a4367f8d18f990693a' => __DIR__ . '/../..' . '/app/functions/validacaoLogin.php',
        '67d1f84d075e0030240565987b81f2fe' => __DIR__ . '/../..' . '/public/adicionar.php',
        '0ef9421bb0ddd5c066b55016f8306f92' => __DIR__ . '/../..' . '/public/editar.php',
        '273ac878c77cd5284a853b1f02eba350' => __DIR__ . '/../..' . '/public/deletar.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita03377e4e64b62de42470e3f3f64e755::$classMap;

        }, null, ClassLoader::class);
    }
}

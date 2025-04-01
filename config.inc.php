<?php
declare(strict_types=1);

/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 */

/* Idioma predeterminado */
$cfg['DefaultLang'] = 'es';

/**
 * Esta clave es necesaria para la autenticación basada en cookies.
 * Debe ser una cadena de 32 bytes aleatorios.
 */
$cfg['blowfish_secret'] = 'DvnTffxqxsmAJwcY=^$F'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/* Configuración de servidores */
$i = 0;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie'; // Tipo de autenticación
$cfg['Servers'][$i]['host'] = 'localhost'; // Servidor
$cfg['Servers'][$i]['compress'] = false; // No comprimir conexiones
$cfg['Servers'][$i]['AllowNoPassword'] = true; // Permitir acceso sin contraseña
$cfg['Servers'][$i]['port'] = 3306; // Puerto MySQL

/* Evitar cierre rápido de sesión en phpMyAdmin */
$cfg['LoginCookieValidity'] = 36000;

/**
 * Configuración de directorios para subir/descargar archivos
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/**
 * Fin de la configuración del servidor
 */

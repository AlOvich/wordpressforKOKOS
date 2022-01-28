<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wrodpress1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f}fxz)^~lI!(~M22ATo|E=CS2xq<e`2fY4&0 5I/VBZuefzwX{Cx{<mC/RjVl,(~' );
define( 'SECURE_AUTH_KEY',  '#h$)O7JXvpg0+J47~,Gyk?sQw|KGAZ=nJCtev!-pMfMbe@}jbYTm!.,E7yV-TLoI' );
define( 'LOGGED_IN_KEY',    'rVeWQxE;[KH Vt)mQ?Id)}8AKAEa3_NDO9je0$Ad1>[byOe{e[V7G$+bj)UGDU-s' );
define( 'NONCE_KEY',        '-wv<%>_Pv*ReOeHATxXsq(%{gBdZ`uR3Wcj[}KK^rx)dUx02`e-m~PwgmA>1&vGX' );
define( 'AUTH_SALT',        '?uamT#Lx,<k66$Yu.V-s&]W)?$phMRta]LMe&T28M]4HtnRywX*]Dq0>S0.(%c2K' );
define( 'SECURE_AUTH_SALT', 'w+bJYA3z-f0t7lIuste_(*<#y{3C$~po:eP+CO;C0u>@tSU6fBYOyA!#N:!w@(Vf' );
define( 'LOGGED_IN_SALT',   'V 1|0=uJm9Vk*[SW8C}7008U=nz.7T{fcfLLVJ8Kbol3 Uzq-5bFlvOc1ky%`oKQ' );
define( 'NONCE_SALT',       'EMgaKVShiykjmrqJ,C0DlwA.MWt*wc9>Eh%bGzCj|b9E0g|Dmj-F/W+7YxU&2[c%' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'parnaspalazzo' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '}R3;XxT!|N=MKm|)5`I[{3z=)X,HGnyp=DGPeK)K pXYV^m*HC|BCBmQeN$/(x@}' );
define( 'SECURE_AUTH_KEY',  '`,k:RYPt}2{#2^OyEU`w688{, {F.5Mk8,|7xb9p&L<)$sn[khWKs13}K8oMFM3q' );
define( 'LOGGED_IN_KEY',    'c/lS72/o~tQN*K,TWU]hwS4b;p$0i1`k$%Vj>E+nW`/MH!jGGz34<_yg6U2MJery' );
define( 'NONCE_KEY',        'I}VNz&,bxpk{-;7D2|.xR_mj?#!?h|<(f>N4{^z/qa`+O -H}3AN}O&+`qz5>xKb' );
define( 'AUTH_SALT',        'Ra$L,D7Oy2d#v#4CIL~.ZPxcoJ0WAbXB;vyMuz5`v2XBF7BW6),<wKO&%`9~[!I1' );
define( 'SECURE_AUTH_SALT', '[}6.*pR5:P=K)&aJh3`=~Q!0Qe.CNSB%8 8Z]3_mC:YTigHY{Jx$|5Z`=t8M7-u9' );
define( 'LOGGED_IN_SALT',   'zoXumf;WjAJnC8Cem~k9<:qhf?X>= :%G~-D~cyz)iN*]$o=p#MD3D_,C0M(,BN3' );
define( 'NONCE_SALT',       'a-TZ1FQcjag!o,A]-zn&&%u7Z44?;>cM:I<Vqyg-Bh*W@b9:kN,RJ#}k!G/}cd85' );

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

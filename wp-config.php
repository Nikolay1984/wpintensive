<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wpintensive' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~nTVJjXjwMXi_Ry:z@0S(M<_oV8dKO8T,HtA=%^ jM2N4a 0#HVHp.w1b{F*beeT' );
define( 'SECURE_AUTH_KEY',  'SujKhg~2w6T{pYa5Xk/X>c>J3_Pc_f8kU#dAtiJ,CPBc2qBCCsvreLr]%^B?+!vB' );
define( 'LOGGED_IN_KEY',    '()BAJ #D<|Qm_,{*xPY_TQQ6:XDn3cPbyh97o6$6P!vKD(%hP>Ql9xEh+:3+VW8&' );
define( 'NONCE_KEY',        '#8IrVdn~W/|GIy.a0a5zZ}yB#@IY+VtB`$IVttTK)NXQNB%{m=s^pS$ +PB,TyVa' );
define( 'AUTH_SALT',        '^k~>ujS(6*q$X-q,`{:2f: u$jH<6#<gu+]5+RHH3?=00Pnw8[]i$%bnZ@G1pI79' );
define( 'SECURE_AUTH_SALT', 'd5P<M8dde%t&VX&`n1M8t+a8M@A~#De?c]TmF~-~} fFLhu}+(kCKQPc1P,00$SO' );
define( 'LOGGED_IN_SALT',   '/S-Gg&,vc jKa!Wm#4)/r [iBaYfv/46srUn0mf#Qc(IC_>g{&rqOLTf+HI5I3~2' );
define( 'NONCE_SALT',       '1!yec,v,/ I 5N,(6h6E;Bk(ts>39X.(L{TiG#v4 @AlhneRqBa_ieV)6uPGEt6J' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

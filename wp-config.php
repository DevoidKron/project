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
 * * Настройки базы данных
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
define( 'DB_NAME', '1577-22_47768' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1577-22_47768' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '8c6fb6b1a821249a7258' );

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
define( 'AUTH_KEY',         'Yq*l>%.-PvVSM4{hzCfh[M!u0^R,D61{NWB6~y,-[T(>HnugW<qZ[F<&`<fg7RFy' );
define( 'SECURE_AUTH_KEY',  '[cfs3U`zvFE;h:a[KBvwB$1&po63m{0Dye9nRK526^Miuf:G;*|;:Cm]?pV<>]lg' );
define( 'LOGGED_IN_KEY',    'XK-9Rm, YQfIX5zut3W16OV*&k3?*b+iv.2qb Y@5EhoPBVG]ugrvlJ^BMT5e6|a' );
define( 'NONCE_KEY',        'J=@b!M)b-pSO}D{ci7/t<ErHU~c&!+1xNoDCz&c:zo?]XM-Ce&DtS9Xhog7`};@U' );
define( 'AUTH_SALT',        '28</f6S=Ac^AqpN&yx9+Lj-6nONQz35[GhB)z#c^gr08v4jDrb7 JIWptyj8Yayu' );
define( 'SECURE_AUTH_SALT', 'PuV0e3tUR 8V7c{V$6bA]XGu?N8Y?Af(*.Eq.|5<oxFoDX`Jso7rn2s8iE^p_4dD' );
define( 'LOGGED_IN_SALT',   ')eiy]T(l|GsI10tQr|F[EV_!a0`M3~Ij+F&]45m)tw+%rPa9?vP%?mK:xQl~`5o$' );
define( 'NONCE_SALT',       'kx.P@ND9cNs1%NyCKzfNPc&]]{mga/K82%/zCZ*4<&e^Jr)vt.n3AFX4r!g@eu^J' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'S5uUF_';


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
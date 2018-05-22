<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'portfolio-2');

/** Имя пользователя MySQL */
define('DB_USER', 'sbv');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'sbv69172410iq');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[XJK98oW,xhol9v`EKmTfztI:Bkp&CYamB3tXuug0$bmM&it_I2s-_rW7HnKEpU?');
define('SECURE_AUTH_KEY',  'MF#jZs8+puJMP7*>+H9A 1=pg 6hvDyz~7#XL9,DxmcR!S.-uj/CXW!GrF|T4E{!');
define('LOGGED_IN_KEY',    ' @g0e|*n;n[T-I8]T$Oi3EVgW._U8kv=`FU|b+Ky}hx*HXnpxeT{P~qSsV6_flIV');
define('NONCE_KEY',        '}?:#5)qGH;N)BT$7W?v)5 |yLPv/&:{O^44^_JAMz!%S%(Q*(bgSnO!{n56M.#Lc');
define('AUTH_SALT',        '4L%m]:m>xlsu@y,H}@z+6pFE/>0s-n4#2SRJ2ZK,4HS^wFfa]j0lfeyK<]wE|M>I');
define('SECURE_AUTH_SALT', 'z@( <r:fDY3:V_C[#Duj% ph,!ujD`-{R1I>}r}0ssEZam;8KmG+Gx93(rhm_~NQ');
define('LOGGED_IN_SALT',   '|x4ljCyfM  #,Xh-{E/~{[aE%65eDQf<!U|=j|:Pi}zN|-2;v`1.K^mO29t%P!;A');
define('NONCE_SALT',       '2ywUZ?p$`?wv4O|xE#N*k`Z-6Ddq#TK7(Hf&)j?)q0Ve)XDJn:$(nZZ5u/!UW/Vy');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

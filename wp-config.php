<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */

define( 'DB_NAME', 'banco1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'leinad' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );


/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{8gFZsZcOSTd]b;`YZ].[A-5Thyca`(_<=kdGe~@X$x J%=eqn$wk6:{iUvd1#UE' );
define( 'SECURE_AUTH_KEY',  'nx{gmj{Lxz6osMv2Vnm)p$rwWcGo*4z,>8nK&wPg.9zY=$z6Oh{uBxQ[ns}0NCD&' );
define( 'LOGGED_IN_KEY',    'sLols5!9Ti<n|a?=!4D#oSRjKt)mVblB;vP&/,o3JMy6*L#ZZsdhZUUn2<t@(n;q' );
define( 'NONCE_KEY',        'gPid_FXeS:a686*Qv?>K>K5$Ie2}O[x4R~9,+Cj]Vo6P.H5#Gr*,^O~4~P7eOGDk' );
define( 'AUTH_SALT',        'Es],[WHwLi:#?,{@3G[CI:nr R=D8YK,DzSote7nSWkF0/I}e.tF]4NzY[8P:e&_' );
define( 'SECURE_AUTH_SALT', '#{Ziji|O}r@7/>wL|w!e7++N^0}$tUYGI{wq8y9ffEejb6QcCZ`c]auD[=`n}fqq' );
define( 'LOGGED_IN_SALT',   ':Raduqq-UHhnFU0ySt|^`YQpeY,IOIpg-cGw$WH rJ$5VQhB|]3$*u34Tz[x7@Im' );
define( 'NONCE_SALT',       'k},P>*9%RFuF%5aT{P~y+-]<9]R{kCa(!6?E}#tH71K?qU$!Z~fJD)m0YQxn5?8=' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

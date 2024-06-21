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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'curso01wp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'IZ(&7(u0w2A$e|0<gOo|V:Ay*G.#+kV/}$S96U$vC*6c<l~=/JVi {y*j|4wi;^@' );
define( 'SECURE_AUTH_KEY',  ',qor/j}.dK{33!ltciO>N(IC$x%aBf 2ic,?&>ML9?c~uO8g`x6KL%^-bn-s:_TQ' );
define( 'LOGGED_IN_KEY',    '}m{#v18]0mIKy@pt+z3f^_%>j%^;l>kH06xH_AJE|d[ucw]3CK5u1X`9vtJq6dXK' );
define( 'NONCE_KEY',        '@%(y?MFya;=7db:jvXP#9 Q Gi~Ny4]d:ON7R/2s}Hf<mDV<eH@Y:.=@>3m*QW6W' );
define( 'AUTH_SALT',        '/no3Ey4H&]=c$OvT/nlh/6WS6_j-60ivK2z2bVabp|DG17N$ brr ?oxf@JsH? G' );
define( 'SECURE_AUTH_SALT', 'C2 Z,qP<;1,QXFR<(Fv0Mw48]y4@E@k}K;0VbV`1Dg%<Mg_R9R<L+}J ;3f_v_6H' );
define( 'LOGGED_IN_SALT',   'l>C)oQjife~ {)N#ri:][8S9a3<M7,46EM-%Z]A<`)Oowo%_Us;=@uu8BcL)EXT-' );
define( 'NONCE_SALT',       '|5Yd%}?L!x^|;qEiLKWFZ2*+oX,vly=Rfs(syDtJE)e#MPn{wB;<2|hJ:Z^Lobeh' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

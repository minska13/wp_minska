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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '[|)e6Cd[<%>}=TwYJ5g_UGpct,G8c4jAGo5lU)oen0dS2R~fe>.`=OD$B}H!.1TT');
define('SECURE_AUTH_KEY',  '2!se}3W`}h*~*aAC*CV1qp| 8+uGsmiK{ZF4[TEa0uZOqDmM<=S_%iypiIpS^ipC');
define('LOGGED_IN_KEY',    'SEbowC`Zncu 7.j8bR<Q4M;aKbi>D<<]3 _bk}a$Hf8Rw,(8Mk0a;2zbxg*>af!*');
define('NONCE_KEY',        'i.HJoTS.cDWoq*^-@~kOq^%/uwBX[QhO!QQq3E-[c*RoJI+I~Vi[ qxgJFe2$6 t');
define('AUTH_SALT',        '{.8HW5#aL4JAY[;,Hh0 U;l5}P0GDVbG$m,FqJm17J[#:mnCEd$AzP+SO,{|+59Q');
define('SECURE_AUTH_SALT', '?I[GW9 wgmGDbDbP5KR],n771f/LSvi/WT;+(,oZn%OzU7[9fjmJ[A)i?*FO9Lzo');
define('LOGGED_IN_SALT',   '7(zq2^A|j-%L%|qluKG,sG(!4G*phZv;eeVEkCNPCN;h:dNc4aH{14j~@lcp`TyZ');
define('NONCE_SALT',       'Lj#e?/$+R1)Sd]A.VhRys_4Y15+>?04JCYKGP:/f$det$E]>z_oUBt<4Y(;9Lo)c');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'soissons_games_show' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T-&v*/P U0]EDh8Q.<|V I6>8LJ,DKh8|bEIV#e0 {=~bF/8=x*;W{8x^cvz*Z7L' );
define( 'SECURE_AUTH_KEY',  '/D<0R{*BUiVHrD::ex}&3wQ4u&]Vl{hH7p=xLo$#ODxK^3cr&0aT7R$LDJ0uBk}&' );
define( 'LOGGED_IN_KEY',    '$ZIQE-lSg@p,;KU,E6*7lv!:WkYmf?f9`/xzL CsD=RiRQlp-ow5Fzzn3q;fQtVo' );
define( 'NONCE_KEY',        'DL?(0(3v}}FtAr~3}!c2mNj{,?L5/SW NR`SJoc+Od0i+*10b>6(+J/;7Sxcd;k{' );
define( 'AUTH_SALT',        'U xA+;183MccJ,8aMIRWC_MdXw0S_4uhm:<HLv>J=0U@st^w} O7Lo^&!U)~h~Nc' );
define( 'SECURE_AUTH_SALT', 'IA&x])JU>e^TduF@@c|6=[0LP?LNDEhc<`LhGZo#Sp<.RxXwLvJ>#^FbVieRT]kY' );
define( 'LOGGED_IN_SALT',   '1&6<GuC#<clr)3+(I]ZW+;=Lk@Qu~dqC4MStARv?Fi3aJ:d~fEA0|(~kq}TbxI)N' );
define( 'NONCE_SALT',       '1VD!p-*D+|?[+2P%1xY85L0zrx=&{*U5OJ6%:<Wa^$cn}8u`EjIq1v1;M s.ISD<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

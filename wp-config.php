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
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         'tB[eP)(McUwB4$s>#T5xT] Eh>V aQ51o*HEvR7U6XWBo)P4ksl +k;3bLph51VX' );
define( 'SECURE_AUTH_KEY',  '*HQtx:DE`&k2l86!9symVyfAx KYUI-YO5c|=d4Y)X{[IvZzj8KnXA!AiXxRjlOf' );
define( 'LOGGED_IN_KEY',    '!jWhI(p:Nfl)kkx$.icFZ)<|mZ_w*<ld%a<wcocN#S=fcbQFAvw=[?-v;+/J55X%' );
define( 'NONCE_KEY',        'J^GAF4j)3ava7Q6e[M@iLBwSunhz[~@RyzDU nvbnkN9PAsOq@0`Nn[qIG7t&{zT' );
define( 'AUTH_SALT',        '7.RbmJ0 ez(3]7#Thn+G;v`BULY5,=%1tok8Agf4FAZg$L,2]M`-|8DJ)_`mO)*0' );
define( 'SECURE_AUTH_SALT', 'Yzg#;mDO*e1EGMb+$O:2+iw8#q4lZj;8x)}BHrjw2i/F8IVZ{2V57%f1gfQ2LX-M' );
define( 'LOGGED_IN_SALT',   'TjvW$t0+pbN)>YqJ@VI*N:+(< #;)>{)n.vYlnb7/zYLCWIa%V*>o%g_J:k*ob^=' );
define( 'NONCE_SALT',       '{+10-SqNm*{slg 9)&,DH,Ffl?N<Brp4pPR@DTYC2/(`6BLlu>nC,jUMvbX]i#Oj' );
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

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
define( 'DB_NAME', 'bigfood' );

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
define( 'AUTH_KEY',         '2}>IUZ;+s|K;GuX<J/Ek?j0&/GFs2[~>}$3ql*X_B ~qdbd#(OxJ<~g-)2F_z9`%' );
define( 'SECURE_AUTH_KEY',  'O|FGSQph..sm D3ib4d9!J0`zG=cRM}2:D~r6MQw.MN&=Z+5:v?inz3&4![52Pb<' );
define( 'LOGGED_IN_KEY',    'vC@IW;L5 )SuUkET2~9W300Hv^Te!/ArmH*/7vo0[ndzeD>N OQ <]c`[lu;5c}S' );
define( 'NONCE_KEY',        'Pl2%KJ64-#T;* }Ok`UUiuAwO55E2B@0B]4>GN.pMatkNW_1@$K-iZ[lIT=i,,Tc' );
define( 'AUTH_SALT',        ']xzb`2kH >J%w877!,:mCyahtM^5#j(0W-.f6(YJ-j$e7.t9V|]Y=,6]gG+d:$hx' );
define( 'SECURE_AUTH_SALT', '/4&iO/Y<NEPNZ3?4FZJ7iv%GO}q4=$|9-B>Pe^y6qmUqFSL7s<r4/Jw8#&5Zu7E/' );
define( 'LOGGED_IN_SALT',   'f0ueN(jKGj/,6w5zz*u(fzDa!~21Cb!mzS ]ae.#rlH:+!Vs4cD~%]{&}/Lcbx;v' );
define( 'NONCE_SALT',       ',7(@JzfLMp%h}}L+~JE~]Xp 8R-uW5{rIrW9<d290S75GL#yHxsLR2Ng/j$UcxyD' );
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

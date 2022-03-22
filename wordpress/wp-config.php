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
define( 'DB_NAME', 'wordpress_johan_gaudin' );

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
define( 'AUTH_KEY',         'G&+.Y}0a3c_g6-am>(Ko /3GnNyBUu zy}LBH$5hXF{/:(BRXj(&jXFE|M3C(#y!' );
define( 'SECURE_AUTH_KEY',  ']C$|>e/XP/i{L#T1UE=OKT_s;&]b6k<?[x(iHW7#e?|GSW(!Jh>&8rVYfMx&&lY;' );
define( 'LOGGED_IN_KEY',    'zQF7Vu7z`n@z8Bp0Yt`SOEq;^d+5](h8v8i&AUY>bBfog7s=@7&e)Sf890kV+H=z' );
define( 'NONCE_KEY',        'P*=L-Y%iqBtzr/E-o|=}AB#kw:>4S)&<#nIQu((KJ;*me)cYSTWf)96&eWULv!-P' );
define( 'AUTH_SALT',        'vh1SkD,vVULW8U2<K28W);vcaq%obKzq[W:aqid.*,o$V<*9&5F^Qhl.|3}p,rA4' );
define( 'SECURE_AUTH_SALT', '!bs_NIw@^y!E*LoLVL/2+A(m9!+TA->|o%4}1Si6Xo{z( m.vR.*+j2_:BIStttv' );
define( 'LOGGED_IN_SALT',   '<Y04-xzT.,3zN3,Sd-n!i2]P>jJ;!]yknM]3* 9FX(NNDP/+N>{|lO:rd.)I05G#' );
define( 'NONCE_SALT',       'oGkA]0s+r^HwrBu&W4)jm zSu6exT%5g kq)4A7S%x/pycLbmvvIB.|?0jfNP#uf' );
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

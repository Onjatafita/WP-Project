<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'WP-Project' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_<C*Ve{+VVylvGM,G.nH*ju1rh$L.Am2YV9I|H7qN}gC3H<sgwuyECC1Pp[-/YiV' );
define( 'SECURE_AUTH_KEY',  'f|kFKjPiB~ffkk[m!&-(Z5a6oTm3x0ga>EtZ5~nE?lpiA84o*i5|q&j(V%F62,I|' );
define( 'LOGGED_IN_KEY',    '1yZ++rJbns6)+YYA`eH,taaFW`OT8<Avl(`My}<m[jv2.hUQRjplm/X}.;:|mXM|' );
define( 'NONCE_KEY',        'l0^z<{D^t@Erz[Eg:<|-^0g%Vn^&Txth(S4PkcsBFdp-,WSs)dZNHP-#=p]5@);i' );
define( 'AUTH_SALT',        'HP>tbSK`wjT/Ts#9;JoatuZ3?cXHBHMt*AySJWr3Z&;(XsC~%K4J4d[sPb$yV^)7' );
define( 'SECURE_AUTH_SALT', 'QS5<x2re rY1U-$<fQ%8)dCt?Mu5@LwwH!J)PyxtUlJf|gre4WYq@S3uNzv[g/++' );
define( 'LOGGED_IN_SALT',   'IY*YCL}n7bAXtv^B.QX}[l:lscpwn5k7(TYIVy|-+a?BfpGNA;fgr3)HrcB)Howt' );
define( 'NONCE_SALT',       '+hg8i#@i1[49)a%Re1+$(opvU!C)Oq;UKVQdf5qf#*X*ff,$/&qe%*&GouPer-6:' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

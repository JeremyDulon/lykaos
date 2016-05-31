<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lykaos');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' qw1Fy7ryOYR}&==I|7lvh?z?Np/@9w!#euszMtdam;3TVA$5AVhnF&,kgcI9ybt');
define('SECURE_AUTH_KEY',  'v+FavvE{S8$T/aajlk_A.AaY*?Tq&;|dp>/s8egTmTs<{s}U]+req1GB@1rvfJO,');
define('LOGGED_IN_KEY',    'C<Y`<rU02[fR4xN7If6dAD?{X|gGN1)W+g+2(iKh]+9V( Hr7W4|+;u9i- #]`sf');
define('NONCE_KEY',        ':!U]*pt1%t%+3fQ:B^^lt;+(<zt!y #-8U3/svGeO4%Ckg1ty|QjyZ1)v<ocxP-d');
define('AUTH_SALT',        '4PzgkabexKbBC/b&#^R,pKI$[UTK67Tr+Ty*3|AkKnBI/(Gj#6p38(XgC<z0-4z ');
define('SECURE_AUTH_SALT', '*i:9|]6hx+Pb!`vwJM})wz1,kAwcxKHQ wK1uQ~9++*w![Q2E W:~nPoi%hf=5xc');
define('LOGGED_IN_SALT',   '(/N+KWSM)7-s|pSM<h,=.Y:$o!CJ#Eeo&)/WV*:q~-`tm@p 23Q#Qd5;ZLmbvmkg');
define('NONCE_SALT',       ';!i!3A.@dA3C%S.Kj|eaNVQR*.0Vj~|-~ q*}YKSJ 0]E#TT,lD7cD.:hSR@3)8}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
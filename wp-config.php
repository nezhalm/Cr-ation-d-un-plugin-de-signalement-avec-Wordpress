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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         '3zh%8qVxpvE%}nU<{_J]19Bf62}Qm.YS58}SyoYBJhqOE/RqO@TnL3Ar_&v]=.dB' );
define( 'SECURE_AUTH_KEY',  ']l5X)UV5^B4`Sw[hn=I5_-r]3RT?[Rq+b}ibrPZIFx>1}h,`wD4t{!V#`wjS#7y9' );
define( 'LOGGED_IN_KEY',    'L1`49uYp{~&^iG2fK&o#h{[8j^h;%z$2+;Qw?3A5.yk}DPA3Y*e6?r8e(@qhC<cA' );
define( 'NONCE_KEY',        '75R7~gw3cu{[:%Z8q@k@~w^Tc/qDPeSzWHM>RVmibp0Cd.G;H=n*%95qve]]TQ.!' );
define( 'AUTH_SALT',        '~0U+s_S!&$v1@dx;s2a5us5WUkiCg@Ni=[ZSB>hd?5B0VDBrt0cE|h.:>Z-umNr4' );
define( 'SECURE_AUTH_SALT', 'CI!*px`&b`eLp%M]|gC~Nsq<%x#6:QQyJ5N>8 )l/PVOYe@i<7qc`/K,h8v^RMGb' );
define( 'LOGGED_IN_SALT',   '6K9z598-pkrbkt$<gr{kQ{VJVZ(OV[0cuD7_ZvaKLjjlW}N:~Ol`fHj{Pm2[pmSq' );
define( 'NONCE_SALT',       ' %33=Q<Y(Ju&Mjf#-wh(6s1d8f)BDwE)T!T5C6FaXTO,c+!pQA^i_p|5J3~dX0T6' );
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

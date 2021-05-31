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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'adam');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'adam6559571991!');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'e`+BT-S!M#0`BY#F7r ],&A1aJKmO?K0(,2Q6hUA:[57t{.E`[nwpg={bX(/f$=p');
define('SECURE_AUTH_KEY',  'N]wcZvB52X/mk4e!0pbOqZzMhcU^N<Ti!72[:72:jYeI6;shw9(HxA!$b?3qk:;?');
define('LOGGED_IN_KEY',    '@p03vKtnzJXJP;6`^8L|y({O=PU295`;7Tc?T!u&8f{UE][I A3.%3`DS{)gA!+.');
define('NONCE_KEY',        'lmVEp%}j K@N%yHy]bgsjNV3gzxC/F]u3D6_n:8.tT}wL$RfhnOC7Dz4edxlR[[+');
define('AUTH_SALT',        '#EJxq eRD:dM]Y&&;|k #t;;Rj&[AA|-u;PX~^?b-+J%76`7.$Z?K?,3m6 #@WrT');
define('SECURE_AUTH_SALT', '?yBXJ}Jfqn5d-zloGC*=G!0NKxSLMFWVa<Ltstc[q)=bRdV[B!st]eZ^2e%<PFQt');
define('LOGGED_IN_SALT',   '?}0(w5|X !az lbjTLHTyKjV!`A*#}I:rn]Pz/w72FVRV>BnyjZohwZJK47B:uG&');
define('NONCE_SALT',       '{%>LcOhWr Vt<J7wZ9*T?QMY]c67E:{}]5q_=_e9d>2Phvujg$41b{AANb.<nw!5');
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'admin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'passwordMariaDB');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'SKazw*d+4|GThLAboLG(c ss?}MNkq<[qv*r_;M0}W95[mai~9D/2OBHD)<5cVLm');
define('SECURE_AUTH_KEY',  'r>u~gT3&|AELjc=AD&6r?K_10Yg=c5$*&D1d_NHnvrPmppg20JY-cCztjgvM)[=@');
define('LOGGED_IN_KEY',    '5Wro[~q+m3A5(EWa6l8un0[XS`);TMOZ!J1_ki3LYmB5= CG!AVj(?kuLNRK3sJk');
define('NONCE_KEY',        '),YL~=SSho+%K/ux#EC}iS[(c:!Sv?L=tGJ4RG(uf<&(rcu9ML|{w$X|K/,c >9(');
define('AUTH_SALT',        'mv|!Y[Tq_HAOd*.QZt`e^Ch&!UQ=(ci5p;.0+;i)S1tve30>udAPVyof%LC:(G:/');
define('SECURE_AUTH_SALT', 'Ys=fb+&%S}725m *n1B0brEuPBHQ-*pshf{HAIV%|(K<J2mbeFL?JyS4/X7xZpn5');
define('LOGGED_IN_SALT',   '[$+_wpP!NON:ZtfPIZ=Hc-iycVrXMVqviPQHt?&Xy-U(E-fiHVR;Ovcdb8Gd&8:z');
define('NONCE_SALT',       '8J*WSGX2~lhM@dYQni{=6.##+G-z56P!1E3/q%|MrU`j)x(J.JrXK%aupT.g;8oK');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

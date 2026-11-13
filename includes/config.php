<?php
/* ============================================================
   VitrineBTP - Configuration globale
   ============================================================ */

define('SITE_NAME',    'VitrineBTP');
define('SITE_TAGLINE', 'Expert en Bâtiment & Travaux Publics');
define('SITE_URL',     'http://localhost/Vitrinebtp');

/* Coordonnées */
define('CONTACT_ADDRESS', '12 Avenue des Bâtisseurs, 75008 Paris, France');
define('CONTACT_PHONE',   '+33 1 23 45 67 89');
define('CONTACT_EMAIL',   'contact@vitrinebtp.fr');
define('CONTACT_HOURS',   'Lun – Ven : 8h00 – 18h00');

/* Réseaux sociaux */
define('SOCIAL_FACEBOOK',  'https://facebook.com/vitrinebtp');
define('SOCIAL_LINKEDIN',  'https://linkedin.com/company/vitrinebtp');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/vitrinebtp');
define('SOCIAL_YOUTUBE',   'https://youtube.com/@vitrinebtp');
define('WHATSAPP_NUMBER',  '33623456789');

/* Base de données (MySQL pour le formulaire de contact) */
define('DB_HOST',     'localhost');
define('DB_NAME',     'vitrinebtp');
define('DB_USER',     'root');
define('DB_PASS',     '');
define('DB_CHARSET',  'utf8mb4');

/* Clé SMTP (optionnel) */
define('MAIL_FROM',   'noreply@vitrinebtp.fr');
define('MAIL_TO',     'contact@vitrinebtp.fr');

/* Active/désactive MySQL (false = enregistrement fichier uniquement) */
define('USE_DB', false);

/* Connexion PDO (optionnelle) */
function getDB() {
    if (!USE_DB) return null;
    static $pdo = null;
    if ($pdo === null) {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (PDOException $e) {
            return null;
        }
    }
    return $pdo;
}

# Wordpress_Custom

## Installation de base Wordpress

* Installation de wordpress avec composer
* Déplacement des fichiers wordpress dans "wp"
* Wp-content => content
* Mise à jour du fichier wp-config_sample.php
* Mise à jour du fichier index.php "racine"
* Mise en place du thème custom "new_thème"
* Avec NPM & Brunch

# Fiche récap

Un [article du Codex](https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory) expliquant comment donner à WordPress son propre répertoire.

## Etape 1 : Modifier l'url

* Désactiver les permaliens
* Adresse web de WordPress  : url/sous-dossier
* Adresse web du site  : url

Il est possible de coder ce changement d'adresse directement dans `wp-config.php` en ajoutant ces 2 lignes, toutefois cette méthode n'est pas recommandée.

```php
define('WP_HOME','http://...../site');
define('WP_SITEURL','http://...../site/sous-dossier');
```

## Etape 2 : Organisation

* Créer le sous dossier -> tout placer dedans
* Copier le .htaccess et le index.php à la racine
* Déplacer le fichier [wp-config.php](wp-config.md) à la racine
* Déplacer le dossier wp-content à la racine

## Etape 3 : blog-header

Modifier le fichier index.php

```php
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
```

vers

```php
require( dirname( __FILE__ ) . '/sous-dossier/wp-blog-header.php' );
```

## Etape 4 : Modifier l'emplacement de wp-content

Il est possible de renommer ce dossier `wp-content` en autre chose, dans cet exemple : `content`.

dans [wp-config.php](wp-config.md), ajouter ces 2 lignes

```php
define( 'WP_CONTENT_URL', 'http://monurl.local/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );
```

## Etape 5 : .htaccess

Modifier le fichier .htaccess de la racine

```
RewriteEngine on
RewriteCond %{REQUEST_URI} !^sousdossier/
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1
```

## Etape 6 : Droits de fichiers

`<user>` : Votre utilisateur courant

à la racine du projet :

**sur mac**

```bash
sudo chown -R <user>:_www .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
```

**sur linux**

```bash
sudo chown -R <user>:www-data .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
```

## Etape 7 : Permaliens

Réactiver les permaliens


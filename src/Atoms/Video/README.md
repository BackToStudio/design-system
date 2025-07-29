# Video

## Description
Composant permettant de générer une balise `<video>` HTML5 configurable pour intégrer des vidéos dans le design system. Permet de gérer facilement les attributs courants (autoplay, loop, muted, controls, etc.) et d'assurer l'accessibilité.

## Exemple d'utilisation
```php
use BackTo\DesignSystem\Video\VideoComponent;

$video = new VideoComponent();
$video->setSrc('/videos/demo.mp4');
$video->setAutoplay(true);
$video->setMuted(true);
$video->setControls(true);
$video->setLoop(false);
$video->setPlaysInline(true);
echo $video->getMarkup();
```

## API / Options
- `setSrc(string $src)` : Définit la source de la vidéo (URL ou chemin local).
- `setAutoplay(bool $autoplay)` : Active/désactive la lecture automatique.
- `setMuted(bool $muted)` : Active/désactive le mode muet.
- `setControls(bool $controls)` : Affiche/masque les contrôles natifs du player.
- `setLoop(bool $loop)` : Active/désactive la lecture en boucle.
- `setPlaysInline(bool $playsInline)` : Active la lecture inline sur mobile.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise vidéo.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML de la balise vidéo.

## Bonnes pratiques
- Fournissez toujours une source vidéo valide avec `setSrc()`.
- Activez `setMuted(true)` si vous utilisez `setAutoplay(true)` pour respecter les politiques des navigateurs.
- Utilisez `setControls(true)` pour offrir une meilleure expérience utilisateur.
- Ajoutez un fallback HTML (texte ou lien) pour les navigateurs ne supportant pas la balise `<video>`.
- Personnalisez le style avec `addClass()` ou `addDecorator()` si besoin.

## Liens utiles
- [Documentation HTML <video>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/video)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php) 
# ImageComponent

## Description
Le composant `ImageComponent` permet d'insérer une image HTML (`<img>`) dans vos pages, en facilitant la gestion des attributs essentiels (`src`, `alt`, `title`) et la personnalisation via classes CSS, attributs HTML ou décorateurs de style. Il garantit une intégration accessible et conforme au design system.

## Exemple d'utilisation
```php
use PQP\Components\ImageComponent;

// Création d'une image
$image = new ImageComponent();
$image->setSrc('chemin/vers/image.jpg');
$image->setAlt('Description de l\'image');
$image->setTitle('Titre optionnel');
$image->addClass('rounded shadow-md');
echo $image->getMarkup();
```

## Utilisation des décorateurs
Les décorateurs permettent d'ajouter dynamiquement des classes CSS prédéfinies pour enrichir le style de l'image. Pour ce composant, le décorateur principal est :

- **FloatAlignDecorator** : Permet d'aligner l'image à gauche ou à droite grâce à des classes utilitaires (`float-left`, `float-right`, etc).

### Exemple avec décorateur
```php
use PQP\Components\ImageComponent;
use PlusQuePro\DesignSystem\Atoms\Image\FloatAlignDecorator;

$image = new ImageComponent();
$image->setSrc('chemin/vers/image.jpg');
$image->setAlt('Image alignée à droite');
$image->addDecorator(new FloatAlignDecorator('right'));
echo $image->getMarkup();
```

## API / Options
- `setSrc(string $src)` : Définit l'URL de l'image.
- `getSrc(): string` : Retourne l'URL de l'image.
- `setAlt(string $alt)` : Définit le texte alternatif (accessibilité).
- `getAlt(): string` : Retourne le texte alternatif.
- `setTitle(string $title)` : Définit le titre de l'image (info-bulle).
- `getTitle(): string` : Retourne le titre de l'image.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise `<img>`.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la balise `<img>`.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (voir section ci-dessus).
- `getMarkup()` : Retourne le HTML de l'image.

## Bonnes pratiques
- Toujours renseigner l'attribut `alt` pour l'accessibilité.
- Utiliser l'attribut `title` pour fournir des informations complémentaires si nécessaire.
- Utiliser les classes CSS du design system pour garantir la cohérence visuelle.
- Personnaliser l'image via les méthodes d'ajout de classes, d'attributs ou de décorateurs si besoin.
- Utiliser les décorateurs pour appliquer rapidement des styles standardisés du design system.

## Liens utiles
- [Documentation sur la balise <img> (MDN)](https://developer.mozilla.org/fr/docs/Web/HTML/Element/img)
- [`TokenComponent` (héritage)](../TokenComponent.php) 
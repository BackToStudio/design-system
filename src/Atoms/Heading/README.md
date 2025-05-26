# Heading

## Description
Le composant `HeadingComponent` permet de générer dynamiquement des titres HTML (`<h1>` à `<h6>`) avec une classe CSS standardisée. Il est utile pour garantir la cohérence des titres dans le design system et respecter la hiérarchie sémantique des pages. Ce composant supporte également l'ajout de décorateurs pour enrichir le style des titres.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Heading\HeadingComponent;

// Création d'un heading de niveau 2 (par défaut, issu de l'éditeur Gutenberg)
$heading = new HeadingComponent();
$heading->addChild('Titre secondaire');
echo $heading->getMarkup();
```

```php
use PlusQuePro\DesignSystem\Heading\HeadingComponent;

// Création d'un heading de niveau 1
$heading = new HeadingComponent();
$heading
    ->setLevel(1)
    ->addChild('Titre principal');
echo $heading->getMarkup();
```

## Utilisation des décorateurs
Les décorateurs permettent d'ajouter dynamiquement des classes CSS prédéfinies pour enrichir le style du heading. Deux décorateurs principaux sont disponibles :

- **HeadingSpacingDecorator** : Ajoute des classes pour la gestion des marges et de l'espacement autour du titre.
- **HeadingThemeDecorator** : Ajoute des classes pour le style de texte, comme l'équilibrage typographique (`text-balance`).

### Exemple avec décorateurs
```php
use PlusQuePro\DesignSystem\Heading\HeadingComponent;
use PlusQuePro\DesignSystem\Atoms\Heading\HeadingSpacingDecorator;
use PlusQuePro\DesignSystem\Atoms\Heading\HeadingThemeDecorator;

$heading = new HeadingComponent();
$heading->setLevel(2);
$heading->addChild('Titre décoré');
$heading->addDecorator(new HeadingSpacingDecorator());
$heading->addDecorator(new HeadingThemeDecorator());
echo $heading->getMarkup();
```

## API / Options
- `setLevel(int $level)` : Définit le niveau du heading (1 à 6). Par défaut : 2.
- `getLevel(): int` : Retourne le niveau actuel du heading.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise `<hn>`.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la balise `<hn>`.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (voir section ci-dessus).
- `addChild(string $child)` : Ajoute un contenu (texte ou composant enfant) au heading (hérité de [`TokenComponentWithChildren`](../TokenComponentWithChildren.php)).
- `getMarkup()` : Retourne le HTML du heading.

## Bonnes pratiques
- Utiliser le niveau de heading approprié pour respecter la hiérarchie sémantique HTML.
- Ne pas sauter de niveaux (ex : éviter de passer de `<h1>` à `<h4>` directement).
- Utiliser la classe CSS `wp-block-heading` pour un style cohérent.
- Utiliser la méthode `addChild()` pour ajouter le texte ou d'autres éléments enfants dans le heading.
- Utiliser les décorateurs pour appliquer rapidement des styles standardisés du design system.

## Liens utiles
- [Documentation sur les balises de titre HTML](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Heading_Elements)
- [TokenComponentWithChildren (héritage)](../TokenComponentWithChildren.php) 
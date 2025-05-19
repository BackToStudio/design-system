# Heading

## Description
Le composant `HeadingComponent` permet de générer dynamiquement des titres HTML (`<h1>` à `<h6>`) avec une classe CSS standardisée. Il est utile pour garantir la cohérence des titres dans le design system et respecter la hiérarchie sémantique des pages.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Heading\HeadingComponent;

// Création d'un heading de niveau 2 (par défaut, issu de l'éditeur Gutenberg)
$heading = new HeadingComponent();
$heading->addChild('Titre secondaire');
echo $heading->render();

// Création d'un heading de niveau 1
$heading = new HeadingComponent();
$heading
    ->setLevel(1)
    ->addChild('Titre principal');
echo $heading->render();
```

## API / Options
- `setLevel(int $level)` : Définit le niveau du heading (1 à 6). Par défaut : 2.
- `getLevel(): int` : Retourne le niveau actuel du heading.
- `addChild(string $child)` : Ajoute un contenu (texte ou composant enfant) au heading (hérité de `TokenComponent`).
- `getMarkup()` : Retourne le HTML du heading.

## Bonnes pratiques
- Utiliser le niveau de heading approprié pour respecter la hiérarchie sémantique HTML.
- Ne pas sauter de niveaux (ex : éviter de passer de `<h1>` à `<h4>` directement).
- Utiliser la classe CSS `wp-block-heading` pour un style cohérent.
- Utiliser la méthode `addChild()` pour ajouter le texte ou d'autres éléments enfants dans le heading.

## Liens utiles
- [Documentation sur les balises de titre HTML](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Heading_Elements)
<!-- - [TokenComponent (si documentation disponible)](lien_vers_TokenComponent)  -->
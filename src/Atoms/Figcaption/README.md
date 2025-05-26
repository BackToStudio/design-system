# Figcaption

## Description
Le composant `FigcaptionComponent` permet de générer dynamiquement une légende HTML `<figcaption>`, généralement utilisée à l'intérieur d'une balise `<figure>`. Il facilite l'ajout de contenu sémantique pour décrire une image ou un média, tout en assurant la cohérence du design system.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Atoms\Figcaption\FigcaptionComponent;

// Création d'une légende simple
$figcaption = new FigcaptionComponent();
$figcaption->addChild('Légende de l\'image');
echo $figcaption->getMarkup();
```

```php
use PlusQuePro\DesignSystem\Atoms\Figcaption\FigcaptionComponent;

// Légende avec classes CSS personnalisées
$figcaption = new FigcaptionComponent();
$figcaption->addClass('text-center text-gray-500');
$figcaption->addChild('Description détaillée du média');
echo $figcaption->getMarkup();
```

## API / Options
- `addChild(string|Component $child)` : Ajoute un contenu (texte ou composant enfant) à la légende (hérité de `TokenComponentWithChildren`).
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise `<figcaption>` (hérité).
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la balise `<figcaption>` (hérité).
- `getMarkup()` : Retourne le HTML de la légende.

## Bonnes pratiques
- Utiliser ce composant à l'intérieur d'un composant Figure pour respecter la sémantique HTML.
- Ajouter des classes CSS via `addClass()` pour adapter le style de la légende selon le contexte.
- Utiliser la méthode `addChild()` pour ajouter le texte ou d'autres éléments enfants dans la légende.

## Liens utiles
- [Documentation sur l'élément HTML `<figcaption>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/figcaption)
- [TokenComponentWithChildren (héritage)](../TokenComponentWithChildren.php) 
# Button

## Description
Le composant `ButtonComponent` permet de générer dynamiquement un bouton HTML `<button>` avec gestion des enfants, des attributs et des classes CSS. Il est conçu pour garantir la cohérence des boutons dans le design system et faciliter leur personnalisation.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Atoms\Button\ButtonComponent;

// Création d'un bouton de type submit avec un label
$button = new ButtonComponent();
$button->setType('submit');
$button->addChild('Envoyer');
echo $button->getMarkup();
```

```php
use PlusQuePro\DesignSystem\Atoms\Button\ButtonComponent;

// Bouton avec des classes CSS personnalisées et un attribut data
$button = new ButtonComponent();
$button->setType('button');
$button->addChild('Sauvegarder');
echo $button->getMarkup();
```

## API / Options
- `setType(string $type)` : Définit l'attribut `type` du bouton (`button`, `submit`, `reset`, etc).
- `addChild(string|Component $child)` : Ajoute un contenu (texte ou composant enfant) au bouton (hérité de `TokenComponentWithChildren`).
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS au bouton (hérité).
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé au bouton (hérité).
- `getMarkup()` : Retourne le HTML du bouton.

## Bonnes pratiques
- Utiliser le composant pour tous les boutons interactifs afin d'assurer la cohérence du design.
- Définir explicitement le type pour éviter les comportements inattendus (par exemple, le type par défaut d'un bouton dans un formulaire est `submit`).
- Ajouter des classes CSS via `addClass()` pour respecter la charte graphique.
- Utiliser `addAttribute()` pour ajouter des attributs personnalisés (data-*, aria-*, etc).
- Utiliser la méthode `addChild()` pour ajouter le texte ou d'autres éléments enfants dans le bouton.

## Liens utiles
- [Documentation sur l'élément HTML `<button>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/button)
- [TokenComponentWithChildren (héritage)](../TokenComponentWithChildren.php) 
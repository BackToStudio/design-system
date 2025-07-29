# ListItem

## Description
Composant représentant un élément de liste HTML (`<li>`), à utiliser exclusivement comme enfant d'un composant List. Permet d'ajouter dynamiquement du contenu (texte ou composants) à chaque item de liste.

## Exemple d'utilisation
```php
use BackTo\DesignSystem\ListItem\ListItemComponent;

$item = new ListItemComponent();
$item->addChild('Contenu de l\'item');
echo $item->getMarkup();
```

// Utilisation dans une liste
```php
use BackTo\DesignSystem\List\ListComponent;
use BackTo\DesignSystem\ListItem\ListItemComponent;

$list = new ListComponent();
$list->addChild((new ListItemComponent())->addChild('Premier item'));
$list->addChild((new ListItemComponent())->addChild('Second item'));
echo $list->getMarkup();
```

## API / Options
- `addChild(string $html)` : Ajoute du contenu (texte ou HTML) à l'item de liste. Peut être appelée plusieurs fois pour ajouter plusieurs enfants.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à l'item.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à l'item.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML de l'item (`<li>...</li>`).

## Bonnes pratiques
- Utilisez toujours `ListItemComponent` comme enfant d'un composant List pour garantir la structure HTML correcte.
- Ajoutez le contenu de l'item via `addChild()` (texte, HTML ou autres composants du design system).
- Utilisez `addClass()` pour personnaliser le style de chaque item si besoin.

## Liens utiles
- [Documentation HTML <li>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/li)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php) 
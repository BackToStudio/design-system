# List

## Description
Composant permettant d'afficher une liste HTML, ordonnée (`ol`) ou non ordonnée (`ul`). Il permet de gérer dynamiquement les éléments de liste et le type de liste (ordonnée ou non), ainsi que le numéro de départ pour les listes ordonnées.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\List\ListComponent;
use PlusQuePro\DesignSystem\ListItem\ListItemComponent;

$listItem1 = new ListItemComponent();
$listItem1->addChild('Premier item')
$listItem1->getMarkup();

$listItem2 = new ListItemComponent();
$listItem2->addChild('Second item')
$listItem2->getMarkup();
// Liste non ordonnée
$list = new ListComponent();
$list->addChild($listItem1);
$list->addChild($listItem2);
echo $list->getMarkup();

// Liste ordonnée qui commence à 3
$list = new ListComponent();
$list->ordered();
$list->setStart(3);
$list->addChild(listItem1);
$list->addChild($listItem2);
echo $list->getMarkup();
```

## API / Options
- `ordered(bool $ordered = true)` : Définit si la liste est ordonnée (`ol`). Par défaut : `false` (liste non ordonnée).
- `setStart(int $start)` : Définit le numéro de départ pour une liste ordonnée. Par défaut : `1`.
- `addChild(string $html)` : Ajoute un item (généralement le HTML d'un ListItemComponent) à la liste.

### Pour les items de liste (ListItemComponent)
- `addChild(string $html)` : Ajoute du contenu à l'item de liste.
- `getMarkup()` : Retourne le HTML de l'item (`<li>...</li>`).

## Bonnes pratiques
- Utilisez `ordered()` pour les listes numérotées (étapes, instructions, etc.).
- Privilégiez les listes non ordonnées pour des éléments sans ordre particulier.
- Utilisez toujours `ListItemComponent` pour chaque item afin de garantir la structure HTML correcte.

## Liens utiles
- [Documentation HTML ul/ol](https://developer.mozilla.org/fr/docs/Web/HTML/Element/ul)
- [Accessibilité des listes](https://www.accede-web.com/notices/html-css/liste/)
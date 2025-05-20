# HrComponent

## Description
Le composant `HrComponent` permet d'insérer une ligne de séparation horizontale (`<hr>`) dans vos pages, avec une classe CSS standardisée (`wp-block-separator`). Il est utile pour structurer visuellement le contenu.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Hr\HrComponent;

// Création d'un séparateur horizontal
$hr = new HrComponent();
echo $hr->getMarkup();
```

## API / Options
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise `<hr>`.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la balise `<hr>`.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé, voir documentation des décorateurs).
- `getMarkup()` : Retourne le HTML du séparateur.

## Bonnes pratiques
- Utiliser ce composant uniquement pour insérer une séparation visuelle.
- Utiliser la classe CSS `wp-block-separator` pour un style cohérent avec le design system.
- Pour des personnalisations avancées, utiliser les décorateurs ou l'ajout de classes.

## Liens utiles
- [Documentation sur la balise `<hr>` (MDN)](https://developer.mozilla.org/fr/docs/Web/HTML/Element/hr)
- [TokenComponent (héritage)](../TokenComponent.php) 
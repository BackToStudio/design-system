# Summary

## Description
Composant permettant de générer une balise `<summary>`, à utiliser à l'intérieur d'un composant ou d'une balise `<details>`.

## Exemple d'utilisation
```php
use BackTo\DesignSystem\Summary\SummaryComponent;

$summary = new SummaryComponent();
$summary->addChild('Voir plus de détails');
echo '<details>' . $summary->getMarkup() . '<div>Contenu détaillé...</div></details>';
```

## API / Options
- `addChild(string $html)` : Ajoute du contenu (texte, HTML ou composant) dans le summary.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise summary.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la balise summary.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML du summary (`<summary class="wp-block-details__summary cursor-pointer">...</summary>`).

## Bonnes pratiques
- Utilisez ce composant à l'intérieur d'une balise `<details>` pour garantir l'accessibilité native.
- Ajoutez le texte ou les éléments visuels via `addChild()` (ex : icône, texte, etc.).
- Personnalisez le style avec `addClass()` ou `addDecorator()` si besoin.
- Ajoutez des attributs d'accessibilité (`aria-label`, etc.) si nécessaire via `addAttribute()`.

## Liens utiles
- [Documentation HTML <summary>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/summary)
- [Documentation HTML <details>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/details)
- [`TokenComponent` (héritage)](../TokenComponent.php) 
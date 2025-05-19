# Query

## Description
Composant container permettant d'afficher dynamiquement le résultat d'une requête (ex : liste d'articles, de posts, d'éléments filtrés, etc.). Il sert de wrapper pour structurer et styliser un ensemble d'éléments issus d'une requête, en leur appliquant la classe `wp-block-query`.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Query\QueryComponent;

$query = new QueryComponent();
$query->addChild('<article>Article 1</article>');
$query->addChild('<article>Article 2</article>');
echo $query->getMarkup();
```

// Exemple avec un composant enfant
```php
use PlusQuePro\DesignSystem\Query\QueryComponent;
use PlusQuePro\DesignSystem\PostTerms\PostTermsComponent;

$query = new QueryComponent();
$postTerms = new PostTermsComponent();
$postTerms->addChild('Catégorie : Actualités');
$query->addChild($postTerms->getMarkup());
echo $query->getMarkup();
```

## API / Options
- `addChild(string $html)` : Ajoute un enfant (HTML ou composant) au container de la requête.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS au container.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé au container.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML du container (`<div class="wp-block-query">...</div>`).

## Bonnes pratiques
- Utilisez ce composant comme wrapper pour des listes d'éléments issus d'une requête (posts, produits, etc.).
- Ajoutez chaque résultat via `addChild()` pour garantir la flexibilité du rendu.
- Personnalisez le style avec `addClass()` si besoin.

## Liens utiles
- [Documentation HTML <div>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/div)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php) 
# PostTerms

## Description
Composant permettant d'afficher les termes associés à un post (catégories, étiquettes, taxonomies personnalisées, etc.) dans un bloc HTML. Il sert à intégrer dynamiquement la liste des termes liés à un contenu WordPress ou autre CMS.

## Exemple d'utilisation
```php
use BackTo\DesignSystem\PostTerms\PostTermsComponent;

// Exemple simple
$postTerms = new PostTermsComponent();
$postTerms->addChild('Actualités');
$postTerms->addChild('Design System');
echo $postTerms->getMarkup();
```

// Exemple avec des liens (via LinkComponent)
```php
use BackTo\DesignSystem\PostTerms\PostTermsComponent;
use BackTo\DesignSystem\Link\LinkComponent;

$postTerms = new PostTermsComponent();

$link1 = new LinkComponent();
$link1->setHref('/categorie/actualites');
$link1->addChild('Actualités');

$link2 = new LinkComponent();
$link2->setHref('https://www.google.fr');
$link2->addChild('Design System');

$postTerms->addChild($link1->getMarkup());
$postTerms->addChild($link2->getMarkup());
echo $postTerms->getMarkup();
```

## API / Options
- `addChild(string $html)` : Ajoute un terme ou un contenu HTML au bloc de termes.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS au bloc.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé au bloc.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML du bloc de termes (`<div class="wp-block-post-terms">...</div>`).

## Bonnes pratiques
- Utilisez ce composant pour afficher dynamiquement les catégories, étiquettes ou taxonomies d'un post.
- Ajoutez chaque terme via `addChild()` pour garantir la flexibilité du rendu.
- Utilisez `LinkComponent` pour rendre chaque terme cliquable de façon accessible et maintenable.
- Personnalisez le style avec `addClass()` si besoin.

## Liens utiles
- [Documentation HTML <div>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/div)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php)
- [`LinkComponent`](../Link/LinkComponent.php) 
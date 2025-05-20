# LinkComponent

## Description
Le composant `LinkComponent` permet d'insérer un lien HTML (`<a>`) dans vos pages, en facilitant la gestion des attributs essentiels (`href`, `title`, `target`, `rel`) et la personnalisation via classes CSS ou attributs HTML. Il garantit une intégration accessible et conforme au design system.

## Exemple d'utilisation
```php
use PQP\Components\LinkComponent;

// Création d'un lien
$link = new LinkComponent();
$link->setHref('https://www.plus-que-pro.fr');
$link->setTitle('Visiter Plus que PRO');
$link->setTarget('_blank');
$link->addClass('btn btn-primary');
$link->addChild('Découvrir Plus que pro');
echo $link->getMarkup();
```

## API / Options
- `setHref(string $href)` : Définit l'URL de destination du lien.
- `getHref(): string` : Retourne l'URL de destination.
- `setTitle(string $title)` : Définit le titre du lien (info-bulle).
- `getTitle(): string` : Retourne le titre du lien.
- `setTarget(string $target)` : Définit la cible du lien (`_blank`, `_self`, etc.).
- `getTarget(): string` : Retourne la cible du lien.
- `setRel(string $rel)` : Définit l'attribut rel (sécurité, SEO).
- `getRel(): string` : Retourne l'attribut rel.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la balise `<a>`.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la balise `<a>`.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `addChild(string $child)` : Ajoute un contenu (texte ou composant enfant) au lien.
- `getMarkup()` : Retourne le HTML du lien.

## Bonnes pratiques
- Toujours renseigner l'attribut `href` pour un lien valide.
- Utiliser `target="_blank"` avec `rel="noopener noreferrer"` pour les liens externes.
- Privilégier un texte de lien explicite pour l'accessibilité.
- Utiliser les classes CSS du design system pour garantir la cohérence visuelle.
- Personnaliser le lien via les méthodes d'ajout de classes, d'attributs ou de décorateurs si besoin.

## Liens utiles
- [Documentation sur la balise <a> (MDN)](https://developer.mozilla.org/fr/docs/Web/HTML/Element/a)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php) 
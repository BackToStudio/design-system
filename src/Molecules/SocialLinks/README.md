# SocialLinks

## Description
Composant container permettant de regrouper plusieurs liens sociaux dans une liste HTML (`<ul>`), avec la classe `wp-block-social-links` pour un rendu cohérent avec le design system. À utiliser comme parent de plusieurs `SocialLinkComponent` pour garantir la structure et l'accessibilité.

## Exemple d'utilisation
```php
use BackTo\DesignSystem\SocialLinks\SocialLinksComponent;
use BackTo\DesignSystem\SocialLink\SocialLinkComponent;

$socialLinks = new SocialLinksComponent();

$facebook = new SocialLinkComponent();
$facebook->setService('facebook');
$facebook->setHref('https://facebook.com/backto');

$linkedin = new SocialLinkComponent();
$linkedin->setService('linkedin');
$linkedin->setHref('https://linkedin.com/company/backto');

$socialLinks->addChild($facebook->getMarkup());
$socialLinks->addChild($linkedin->getMarkup());

echo $socialLinks->getMarkup();
```

## API / Options
- `addChild(string $html)` : Ajoute un enfant (généralement un SocialLinkComponent) à la liste.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS à la liste.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé à la liste.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML de la liste (`<ul class="wp-block-social-links">...</ul>`).

## Bonnes pratiques
- Utilisez ce composant comme parent de plusieurs `SocialLinkComponent` pour garantir la structure HTML correcte.
- Ajoutez chaque lien social via `addChild()` pour garantir la flexibilité du rendu.
- Personnalisez le style avec `addDecorator()` si besoin.

## Liens utiles
- [`SocialLinkComponent`](../SocialLink/SocialLinkComponent.php)
- [`TokenComponent` (héritage)](../TokenComponent.php) 
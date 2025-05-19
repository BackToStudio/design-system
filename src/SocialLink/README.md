# SocialLink

## Description
Composant permettant d'afficher un lien vers un réseau social (Facebook, LinkedIn, YouTube, etc.) avec une icône et un style adapté. À utiliser comme enfant d'une liste de liens sociaux pour garantir la structure HTML et l'accessibilité.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\SocialLink\SocialLinkComponent;

$socialLink = new SocialLinkComponent();
$socialLink->setService('facebook'); // facebook, linkedin, youtube
$socialLink->setHref('https://facebook.com/plusquepro');
echo $socialLink->getMarkup();
```

// Exemple dans une liste
```php
use PlusQuePro\DesignSystem\SocialLink\SocialLinkComponent;

$links = [];
foreach ([
    ['service' => 'facebook', 'url' => 'https://facebook.com/plusquepro'],
    ['service' => 'linkedin', 'url' => 'https://linkedin.com/company/plusquepro'],
    ['service' => 'youtube', 'url' => 'https://youtube.com/plusquepro'],
] as $data) {
    $link = new SocialLinkComponent();
    $link->setService($data['service']);
    $link->setHref($data['url']);
    $links[] = $link->getMarkup();
}
echo '<ul class="wp-block-social-links">' . implode('', $links) . '</ul>';
```

## API / Options
- `setService(string $service)` : Définit le réseau social (facebook, linkedin, youtube).
- `setHref(string $href)` : Définit l'URL cible du lien social.
- `getMarkup()` : Retourne le HTML du lien social (`<li class="wp-social-link">...</li>`).
- Hérite aussi de :
  - `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS au lien.
  - `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé.
  - `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).

## Bonnes pratiques
- Utilisez ce composant à l'intérieur d'une liste (`<ul class="wp-block-social-links">`) pour garantir l'accessibilité.
- Privilégiez l'utilisation des services supportés (facebook, linkedin, youtube) pour un rendu optimal.
- Ajoutez des attributs d'accessibilité (`aria-label`, etc.) si besoin via `addAttribute()`.

## Liens utiles
- [Documentation HTML <li>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/li)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php)
- [`LinkComponent`](../Link/LinkComponent.php)
- [`IconComponent`](../Icon/IconComponent.php) 
# Composants Token

Le dossier `Token` regroupe les composants atomiques les plus génériques du design system, servant de base à la création de balises HTML simples ou complexes.

> **Note importante** : Les composants `TokenComponent` et `TokenComponentWithChildren` sont des briques techniques de bas niveau. Ils n'ont pas vocation à être utilisés directement dans les projets applicatifs. Il est fortement recommandé d'utiliser les atomes spécialisés (ex : `ImageComponent`, `ButtonComponent`, etc.) qui encapsulent la logique métier et les bonnes pratiques d'accessibilité.

## TokenComponent

`TokenComponent` permet de générer dynamiquement une balise HTML auto-fermante (ex : `<img />`, `<hr />`, `<input />`). Il gère les attributs, les classes, le style, etc. Ce composant est utilisé comme base pour créer des atomes spécialisés.

### Exemple d'utilisation technique (non recommandé en production)
```php
$token = (new TokenComponent())
    ->setTagName('img')
    ->setAttribute('src', 'image.jpg');
    ->setAttribute('alt', 'Description de l\'image');
    ->setAttribute('title', 'Titre de l\'image');
    ->addClass('separator');
echo $token->getMarkup(); // <hr class="separator" />
```

### Utilisation recommandée : passer par un atome spécialisé
```php
use PlusQuePro\DesignSystem\Atoms\Image\ImageComponent;

$image = (new ImageComponent())
    ->setSrc('image.jpg')
    ->setAlt('Description de l\'image')
    ->setTitle('Titre de l\'image');
echo $image->getMarkup(); // <img src="image.jpg" alt="Description de l'image" title="Titre de l'image">
```

## TokenComponentWithChildren

`TokenComponentWithChildren` permet de générer des balises HTML pouvant contenir des enfants (ex : `<div>`, `<span>`, `<section>`, etc.). Il gère les attributs, les classes, le style, et le contenu enfant. Là encore, il sert de base à des composants plus spécifiques.

### Exemple d'utilisation technique (non recommandé en production)
```php
$token = (new TokenComponentWithChildren())
    ->setTagName('p')
    ->addClass('wp-block-paragraph')
    ->addChild('Contenu');
echo $token->getMarkup(); // <p class="wp-block-paragraph">Contenu</p>
```

### Utilisation recommandée : passer par un atome spécialisé
```php
use PlusQuePro\DesignSystem\Atoms\Image\ImageComponent;

$p = (new ParagraphComponent())
    ->addClass('wp-block-paragraph')
    ->addChild('Contenu');
echo $p->getMarkup(); // <p class="wp-block-paragraph">Contenu</p>
```

## Helpers et décorateurs

Les fichiers suivants apportent des fonctionnalités additionnelles pour la gestion des tokens :
- `HasClasses.php` : gestion des classes CSS
- `HasAttributes.php` : gestion des attributs HTML
- `HasCustomStyles.php` : gestion des styles inline
- `HasBackgroundImage.php`, `HasBackgroundParallax.php`, `HasBackgroundRepeated.php`, `HasOpacity.php` : gestion avancée de l'apparence
- `HasChildren.php` : gestion des enfants pour les balises conteneurs
- `StyleDecorator.php` : décorateur pour appliquer des styles
- `AtomComponentInterface.php` : interface commune aux composants atomiques

## Bonnes pratiques

- Privilégiez toujours l'utilisation des atomes spécialisés (ex : `ImageComponent`, `ButtonComponent`, etc.)
- Utilisez `TokenComponent` ou `TokenComponentWithChildren` uniquement pour créer de nouveaux atomes génériques
- Composez avec les helpers pour enrichir les composants sans dupliquer le code
- Privilégiez la réutilisabilité et la simplicité 
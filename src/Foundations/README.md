# Foundations

Ce dossier regroupe tous les décorateurs génériques du design system, organisés par fonctionnalité : 

- **Color** : Décorateurs de couleurs (fond, bordure, texte, etc.)
- **Effect** : Décorateurs d'effets visuels (ombres, bordures, radius, etc.)
- **Icon** : Décorateurs pour la gestion des icônes
- **Interaction** : Décorateurs liés aux interactions (focus, hover, etc.)
- **Layout** : Décorateurs de mise en page (grille, flex, alignements, etc.)
- **Spacing** : Décorateurs de marges, paddings, gaps, etc.
- **Typography** : Décorateurs de typographie (polices, tailles, alignements, etc.)

## Règles d'utilisation

- Les décorateurs de ce dossier sont **génériques** et peuvent être utilisés par tous les composants du design system.
- Les décorateurs spécifiques à un composant doivent rester dans le dossier du composant concerné.
- Tous les décorateurs respectent la convention PSR-4 : `PlusQuePro\DesignSystem\Foundations\...`

## Structure

Chaque sous-dossier regroupe les décorateurs d'une même famille. Un décorateur = un fichier PHP, exportant une classe qui implémente généralement l'interface `StyleDecorator`.

## Exemples d'utilisation

### 1. Utilisation directe d'un décorateur

```php
use PlusQuePro\DesignSystem\Foundations\Color\BackgroundColorDecorator;

$decorator = new BackgroundColorDecorator('primary-500');
$className = $decorator->getClassName();
// $className = 'bg-primary-500 text-white has-background-color has-background'
```

### 2. Ajout d'un décorateur à un composant (exemple avec un Paragraphe)

```php
use PlusQuePro\DesignSystem\Atoms\Paragraph;
use PlusQuePro\DesignSystem\Foundations\Color\BackgroundColorDecorator;

$paragraph = new Paragraph('Ceci est un texte.');
$paragraph->addDecorator(new BackgroundColorDecorator('primary-500'));

echo $paragraph->getMarkup();
// <p class="bg-primary-500 text-white has-background-color has-background">Ceci est un texte.</p>
```

---

Pour plus de détails, consulte chaque sous-dossier ou le README associé s'il existe. 
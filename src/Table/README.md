# Table

## Description
Composant permettant de générer une structure de tableau HTML complète, avec gestion de l'en-tête (`thead`), du corps (`tbody`), du pied (`tfoot`) et un wrapper `<figure>`. Il facilite la création de tableaux accessibles et stylisés dans le design system.

## Exemple d'utilisation
```php
use PlusQuePro\DesignSystem\Table\TableComponent;

$table = new TableComponent();

// En-tête
$thead = $table->getThead();
$thead->addChild('<tr><th>Nom</th><th>Âge</th></tr>');

// Corps
$tbody = $table->getTbody();
$tbody->addChild('<tr><td>Alice</td><td>30</td></tr>');
$tbody->addChild('<tr><td>Bob</td><td>25</td></tr>');

// Pied (optionnel)
$tfoot = $table->getTfoot();
$tfoot->addChild('<tr><td colspan="2">Total : 2 personnes</td></tr>');

// Layout fixe (optionnel)
$table->setFixedLayout(true);

echo $table->getMarkup();
```

## API / Options
- `getThead()` : Retourne le composant enfant pour l'en-tête du tableau (`thead`).
- `getTbody()` : Retourne le composant enfant pour le corps du tableau (`tbody`).
- `getTfoot()` : Retourne le composant enfant pour le pied du tableau (`tfoot`).
- `setFixedLayout(bool $fixedLayout)` : Active/désactive le layout fixe du tableau.
- `getFixedLayout()` : Retourne l'état du layout fixe.
- `addClass(string $classname)` : Ajoute une ou plusieurs classes CSS au wrapper `<figure>`.
- `addAttribute(string $attribute, string $value)` : Ajoute un attribut HTML personnalisé au wrapper.
- `addDecorator(StyleDecorator $decorator)` : Ajoute un décorateur de style (avancé).
- `getMarkup()` : Retourne le HTML complet du tableau (figure > table > thead/tbody/tfoot).

## Bonnes pratiques
- Utilisez les méthodes `getThead()`, `getTbody()`, `getTfoot()` pour structurer correctement votre tableau.
- Ajoutez les lignes (`<tr>...</tr>`) et cellules (`<td>`, `<th>`) via `addChild()` sur les sous-composants.
- Activez le layout fixe (`setFixedLayout(true)`) pour des tableaux à largeur homogène.
- Ajoutez des classes ou attributs pour l'accessibilité si besoin.

## Liens utiles
- [Documentation HTML <table>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/table)
- [Documentation HTML <figure>](https://developer.mozilla.org/fr/docs/Web/HTML/Element/figure)
- [`TokenComponentWithChildren` (héritage)](../TokenComponentWithChildren.php)

## Améliorations possibles
- Créer des composants dédiés pour `<tr>`, `<thead>`, `<tbody>`, `<tfoot>` pour une meilleure granularité, réutilisabilité et typage des tableaux. 
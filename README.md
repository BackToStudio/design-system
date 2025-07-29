# Plus que pro – Design System

## Objectifs

Le design system de Plus que pro vise à garantir la cohérence, l'efficacité et la qualité des interfaces utilisateur à travers tous les produits digitaux de l'entreprise. Il doit :

1. Uniformiser l'expérience utilisateur sur toutes les plateformes.
2. Améliorer la collaboration entre designers et développeurs.
3. Réduire les délais de production en fournissant des composants réutilisables.
4. Faciliter l'évolution du système grâce à une documentation claire et un modèle extensible.

---

## Sommaire

1. [Atomic Design : Atomes & Molécules](#atomic-design--atomes--molécules)
2. [Exemples de composants Atomes](#exemples-de-composants-atomes)
3. [Exemples de composants Molécules](#exemples-de-composants-molécules)
4. [Foundations](#foundations)
5. [Décorateurs & Utilitaires](#décorateurs--utilitaires)
6. [Processus de contribution](#processus-de-contribution)
7. [Outils et frameworks](#outils-et-frameworks)
8. [Ressources](#ressources)
9. [Qualité du code & conventions PSR](#qualité-du-code--conventions-psr)

---

## Atomic Design : Atomes & Molécules

Ce design system s'inspire de la méthodologie Atomic Design de Brad Frost :

- **Atomes** : Les plus petits dénominateurs communs de l'interface (ex : bouton, image, titre, etc.). Ils sont autonomes et servent de base à la construction de composants plus complexes.
- **Molécules** : Assemblages d'atomes qui forment des groupes fonctionnels cohérents (ex : bloc média + texte, groupe de boutons, carte, etc.).

Pour chaque catégorie, seuls quelques exemples sont listés ci-dessous. Pour la liste exhaustive et la documentation détaillée, consultez les dossiers :
- [Tous les atomes](src/Atoms/)
- [Toutes les molécules](src/Molecules/)

---

## Exemples de composants Atomes

Voici quelques atomes représentatifs du design system. Retrouvez la liste complète dans le dossier [src/Atoms/](src/Atoms/).

- [**Button**](src/Atoms/Button/) : Bouton principal, avec décorateurs et comportements personnalisables.
- [**Image**](src/Atoms/Image/) : Gestion avancée des images.
- [**Heading**](src/Atoms/Heading/) : Titres de différents niveaux.
- [**Link**](src/Atoms/Link/) : Lien hypertexte stylisé.
- [**Paragraph**](src/Atoms/Paragraph/) : Paragraphe de texte.
- ...

[Voir tous les atomes →](src/Atoms/)

---

## Exemples de composants Molécules

Les molécules sont des assemblages d'atomes pour des usages plus riches. Retrouvez la liste complète dans le dossier [src/Molecules/](src/Molecules/).

- [**MediaText**](src/Molecules/MediaText/) : Bloc média + texte.
- [**Gallery**](src/Molecules/Gallery/) : Galerie d'images.
- [**Table**](src/Molecules/Table/) : Tableaux de données.
- [**Cover**](src/Molecules/Cover/) : Bloc image de couverture.
- **Header** : En-tête de page (à venir ou à compléter)
- **Footer** : Pied de page (à venir ou à compléter)
- **Slider** : Carrousel/slider (à venir)
- **Onglet** : Système d'onglets (à venir)
- **Colonnes** : Mise en page en colonnes (à venir)
- **Breadcrumb** : Fil d'Ariane (à venir)
- **Pagination** : Pagination (à venir)
- ...

[Voir toutes les molécules →](src/Molecules/)


## Décorateurs & Utilitaires

Les décorateurs et utilitaires permettent d'enrichir, personnaliser ou étendre le style et le comportement des composants sans dupliquer le code. Ils offrent une approche modulaire pour appliquer des styles, des effets ou des comportements récurrents sur plusieurs composants du design system.

> **[`src/Foundations/`](src/Foundations/).**
> Consultez ce dossier pour la liste exhaustive, la documentation et des exemples d'utilisation.

- **Espacement** :
  - Marges : `MarginTop`, `MarginBottom`, `MarginLeft`, `MarginRight`
  - Paddings : `PaddingTop`, `PaddingBottom`, `PaddingLeft`, `PaddingRight`
  - Grilles et gaps : `BlockGap`, `BlockGapHorizontal`, `BlockGapVertical`
- **Couleurs** :
  - `TextColor`, `BackgroundColor`, `BorderColor`, etc.
- **Typographie** :
  - `FontFamily`, `FontWeight`, `TextAlign`, `TextDecoration`, `TextFontSize`, `TextTransform`
- **Effets** :
  - Ombres : `ShadowDecorator`
  - Bordures : `BorderRadius`, `BorderRadiusTopLeft`, `BorderRadiusTopRight`, `BorderRadiusBottomLeft`, `BorderRadiusBottomRight`, `BorderColor`, etc.
- **Flex & Alignement** :
  - `FlexDecorator`, `VerticalAlignDecorator`, `AlignDecorator`
- **Icônes** :
  - `IconDecorator`, `MarkThemeDecorator`
- **Interactions** :
  - `FocusDecorator`, `FocusLinkDecorator`, `LinkColorHoverDecorator`, etc.
- **Autres** :
  - `HasGlobalPaddingDecorator`, etc.

Pour les décorateurs spécifiques à un composant, consultez le dossier du composant concerné.

---

## Processus de contribution

Pour garantir la qualité et la cohérence du design system, suivez ce workflow :

1. **Workflow de validation** :
   - Design → Développement → Documentation
2. **Tests requis** :
   - Couverture des tests unitaires et visuels avant intégration.
3. **Documentation** :
   - Toute nouvelle contribution doit être documentée (README, exemples, etc.)

---

## Outils et frameworks

- **Storybook** (à intégrer dans le futur) : Pour la documentation interactive des composants.
- **Figma** : Pour la conception et la validation des maquettes.
- **PHP** : Composants développés en PHP.
- **Tests** : Méthodes à définir pour tester et itérer sur les composants.

---

## Ressources

- **FAQ** : À compléter pour les utilisateurs internes.
- **Liens utiles** :
  - [Maquettes Figma](https://www.figma.com/design/wYu3iUpoq6BB3BNj2GOF8W/PQP---Design-System---Sites)
  - [Dépôt Git principal](https://github.com/backto/design-system)

---

## Qualité du code & conventions PSR

Ce projet respecte les standards de codage PSR (notamment PSR-12 et PSR-4 pour les namespaces). Un hook Git `pre-commit` est automatiquement installé lors de l'installation des dépendances (voir scripts Composer) :

- Il vérifie que le code du dossier `src/` respecte les conventions PSR-12.
- Il valide la configuration de l'autoload PSR-4 via Composer.
- Si ces règles ne sont pas respectées, le commit est bloqué et un message d'erreur s'affiche.

Pour installer ou réinstaller les hooks manuellement :

```sh
sh git-hooks/install-hooks.sh
```

---

## Foundations

Le dossier [`src/Foundations/`](src/Foundations/) regroupe tous les décorateurs génériques du design system, organisés par fonctionnalité :

- **Color** : Décorateurs de couleurs (fond, bordure, texte, etc.)
- **Effect** : Décorateurs d'effets visuels (ombres, bordures, radius, etc.)
- **Icon** : Décorateurs pour la gestion des icônes
- **Interaction** : Décorateurs liés aux interactions (focus, hover, etc.)
- **Layout** : Décorateurs de mise en page (grille, flex, alignements, etc.)
- **Spacing** : Décorateurs de marges, paddings, gaps, etc.
- **Typography** : Décorateurs de typographie (polices, tailles, alignements, etc.)

### Règles d'utilisation

- Les décorateurs de ce dossier sont **génériques** et peuvent être utilisés par tous les composants du design system.
- Les décorateurs spécifiques à un composant doivent rester dans le dossier du composant concerné.
- Tous les décorateurs respectent la convention PSR-4 : `BackTo\DesignSystem\Foundations\...`

### Exemples d'utilisation

Voir le [README du dossier Foundations](src/Foundations/README.md) pour des exemples concrets d'utilisation directe ou dans un composant.

---

> Ce design system est en évolution. Merci de contribuer à son amélioration !
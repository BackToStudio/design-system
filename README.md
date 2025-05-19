# Plus que pro – Design System

## Objectifs

Le design system de Plus que pro vise à garantir la cohérence, l'efficacité et la qualité des interfaces utilisateur à travers tous les produits digitaux de l'entreprise. Il doit :

1. Uniformiser l'expérience utilisateur sur toutes les plateformes.
2. Améliorer la collaboration entre designers et développeurs.
3. Réduire les délais de production en fournissant des composants réutilisables.
4. Faciliter l'évolution du système grâce à une documentation claire et un modèle extensible.

---

## Sommaire

1. [Composants de base](#composants-de-base)
2. [Décorateurs & Utilitaires](#décorateurs--utilitaires)
3. [Compositions & Patterns](#compositions--patterns)
4. [Processus de contribution](#processus-de-contribution)
5. [Outils et frameworks](#outils-et-frameworks)
6. [Ressources](#ressources)

---

## Composants de base

- **Audio** : Composant audio intégré.
- **Button** : Bouton principal, avec décorateurs et comportements personnalisables.
- **Buttons** : Groupe de boutons.
- **Figcaption** : Légende pour les figures.
- **Figure** : Encapsule une image ou un média avec légende.
- **Heading** : Titres de différents niveaux.
- **Hr** : Séparateur horizontal.
- **Image** : Gestion avancée des images.
- **Link** : Lien hypertexte stylisé.
- **List** : Listes ordonnées ou non.
- **ListItem** : Élément de liste.
- **Paragraph** : Paragraphe de texte.
- **PostTemplate** : Modèle d'affichage pour un post.
- **PostTerms** : Affichage des termes associés à un post.
- **Query** : Gestion des requêtes de contenu.
- **SocialLink** : Lien vers un réseau social.
- **SocialLinks** : Groupe de liens sociaux.
- **Summary** : Résumé ou sommaire de contenu.
- **Table** : Tableaux de données.
- **Video** : Composant vidéo intégré.

---

## Décorateurs & Utilitaires

- **Espacement** :
  - Marges : `MarginTop`, `MarginBottom`, `MarginLeft`, `MarginRight`
  - Paddings : `PaddingTop`, `PaddingBottom`, `PaddingLeft`, `PaddingRight`
  - Grilles et gaps : `BlockGap`, `BlockGapHorizontal`, `BlockGapVertical`
- **Couleurs & Typographie** :
  - `TextColor`, `BackgroundColor`, `FontFamily`, `FontWeight`, `TextAlign`, `TextDecoration`, `TextFontSize`, `TextTransform`
- **Effets** :
  - Ombres : `ShadowDecorator`
  - Bordures : `BorderRadius`, `BorderRadiusTopLeft`, `BorderRadiusTopRight`, `BorderRadiusBottomLeft`, `BorderRadiusBottomRight`
- **Flex & Alignement** :
  - `FlexDecorator`, `VerticalAlignDecorator`
- **Icônes** :
  - `IconDecorator`
- **Autres** :
  - `FocusDecorator`, `HasGlobalPaddingDecorator`

---

## Compositions & Patterns

- **Header** : En-tête de page (à venir ou à compléter)
- **Footer** : Pied de page (à venir ou à compléter)
- **Media-Text** : Bloc média + texte (à venir)
- **Slider** : Carrousel/slider (à venir)
- **Onglet** : Système d'onglets (à venir)
- **Colonnes** : Mise en page en colonnes (à venir)
- **Breadcrumb** : Fil d'Ariane (à venir)
- **Pagination** : Pagination (à venir)

---

## Processus de contribution

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
  - [Dépôt Git principal](https://gitlab.webcd.fr/packages/design-system)

---

> Ce design system est en évolution. Merci de contribuer à son amélioration !
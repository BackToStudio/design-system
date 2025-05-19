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

- [**Audio**](src/Audio/) : Composant audio intégré.
- [**Button**](src/Button/) : Bouton principal, avec décorateurs et comportements personnalisables.
- [**Buttons**](src/Buttons/) : Groupe de boutons.
- [**Figcaption**](src/Figcaption/) : Légende pour les figures.
- [**Figure**](src/Figure/) : Encapsule une image ou un média avec légende.
- [**Heading**](src/Heading/) : Titres de différents niveaux.
- [**Hr**](src/Hr/) : Séparateur horizontal.
- [**Image**](src/Image/) : Gestion avancée des images.
- [**Link**](src/Link/) : Lien hypertexte stylisé.
- [**List**](src/List/) : Listes ordonnées ou non.
- [**ListItem**](src/ListItem/) : Élément de liste.
- [**Paragraph**](src/Paragraph/) : Paragraphe de texte.
- [**PostTemplate**](src/PostTemplate/) : Modèle d'affichage pour un post.
- [**PostTerms**](src/PostTerms/) : Affichage des termes associés à un post.
- [**Query**](src/Query/) : Gestion des requêtes de contenu.
- [**SocialLink**](src/SocialLink/) : Lien vers un réseau social.
- [**SocialLinks**](src/SocialLinks/) : Groupe de liens sociaux.
- [**Summary**](src/Summary/) : Résumé ou sommaire de contenu.
- [**Table**](src/Table/) : Tableaux de données.
- [**Video**](src/Video/) : Composant vidéo intégré.

---

## Décorateurs & Utilitaires

- **Espacement** :
  - Marges : `MarginTop`, `MarginBottom`, `MarginLeft`, `MarginRight`
  - Paddings : `PaddingTop`, `PaddingBottom`, `PaddingLeft`, `PaddingRight`
  - Grilles et gaps : `BlockGap`, `BlockGapHorizontal`, `BlockGapVertical`
- **Couleurs** :
  - `TextColor`, `BackgroundColor`
- **Typographie** :
  - `FontFamily`, `FontWeight`, `TextAlign`, `TextDecoration`, `TextFontSize`, `TextTransform`
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

## Qualité du code & conventions PSR

Ce projet respecte les standards de codage PSR (notamment PSR-12 et PSR-4 pour les namespaces). Un hook Git `pre-commit` est automatiquement installé lors de l'installation des dépendances (voir scripts Composer) :

- Il vérifie que le code du dossier `src/` respecte les conventions PSR-12.
- Il valide la configuration de l'autoload PSR-4 via Composer.
- Si ces règles ne sont pas respectées, le commit est bloqué et un message d'erreur s'affiche.

Pour installer ou réinstaller les hooks manuellement :

```sh
sh git-hooks/install-hooks.sh
```

---

> Ce design system est en évolution. Merci de contribuer à son amélioration !
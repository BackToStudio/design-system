# Composants Atomiques

Les composants atomiques sont les blocs de construction les plus élémentaires de notre design system. Ils représentent les plus petites unités fonctionnelles qui ne peuvent pas être décomposées davantage sans perdre leur utilité.

## Organisation

Les composants atomiques sont organisés en sous-dossiers individuels, chacun contenant :
- Le composant principal
- Ses décorateurs associés (si applicable)
- Sa documentation spécifique

## Composants disponibles

- [Audio](./Audio/) : Lecture de fichiers audio avec contrôles personnalisables
- [Button](./Button/) : Boutons d'action avec différents thèmes et comportements
- [Buttons](./Buttons/) : Groupe de boutons
- [Figcaption](./Figcaption/) : Légendes pour les figures et médias
- [Figure](./Figure/) : Conteneur pour les médias et leurs légendes
- [Heading](./Heading/) : Titres avec différents niveaux et styles
- [Hr](./Hr/) : Séparateurs horizontaux thématiques
- [Image](./Image/) : Images avec gestion du responsive et alignements
- [Link](./Link/) : Liens hypertextes avec styles variés
- [List](./List/) : Listes ordonnées et non-ordonnées
- [ListItem](./ListItem/) : Éléments de liste
- [Paragraph](./Paragraph/) : Blocs de texte avec styles typographiques
- [PostTerms](./PostTerms/) : Affichage des termes associés aux articles
- [Query](./Query/) : Composant de requête pour l'affichage dynamique
- [SocialLink](./SocialLink/) : Liens vers les réseaux sociaux
- [Summary](./Summary/) : Résumés de contenu
- [Token](./Token/) : Composants techniques génériques (balises HTML)
- [Video](./Video/) : Lecture de vidéos avec contrôles personnalisés

## Utilisation des décorateurs

Les décorateurs permettent d'étendre les fonctionnalités des composants atomiques sans modifier leur code source. Ils suivent le pattern Decorator et peuvent être combinés pour créer des variations complexes.

Exemple avec un bouton :
```php
$button = new Button();
$button->addDecorator(new ButtonThemeDecorator());
echo $button->getMarkup();
```

## Bonnes pratiques

1. Gardez les composants atomiques simples et focalisés sur une seule responsabilité
2. Utilisez les décorateurs pour modifier l'apparence plutôt que d'ajouter des classes de maniere unitaire
3. Documentez chaque nouveau composant dans son propre README
4. Suivez les conventions de nommage établies
5. Assurez-vous que chaque composant est réutilisable et indépendant 
# Composants Atomiques

Les composants atomiques sont les blocs de construction les plus élémentaires de notre design system. Ils représentent les plus petites unités fonctionnelles qui ne peuvent pas être décomposées davantage sans perdre leur utilité.

## Organisation

Les composants atomiques sont organisés en sous-dossiers individuels, chacun contenant :
- Le composant principal
- Ses décorateurs associés (si applicable)
- Sa documentation spécifique

## Composants disponibles

- **Audio** : Lecture de fichiers audio avec contrôles personnalisables
- **Button** : Boutons d'action avec différents thèmes et comportements
- **Figcaption** : Légendes pour les figures et médias
- **Figure** : Conteneur pour les médias et leurs légendes
- **Heading** : Titres avec différents niveaux et styles
- **Hr** : Séparateurs horizontaux thématiques
- **Image** : Images avec gestion du responsive et alignements
- **Link** : Liens hypertextes avec styles variés
- **List** : Listes ordonnées et non-ordonnées
- **ListItem** : Éléments de liste
- **Paragraph** : Blocs de texte avec styles typographiques
- **PostTerms** : Affichage des termes associés aux articles
- **Query** : Composant de requête pour l'affichage dynamique
- **SocialLink** : Liens vers les réseaux sociaux
- **Summary** : Résumés de contenu
- **Video** : Lecture de vidéos avec contrôles personnalisés

## Utilisation des décorateurs

Les décorateurs permettent d'étendre les fonctionnalités des composants atomiques sans modifier leur code source. Ils suivent le pattern Decorator et peuvent être combinés pour créer des variations complexes.

Exemple avec un bouton :
```php
$button = new Button();
$button->addDecorator(new ButtonThemeDecorator());
```

## Bonnes pratiques

1. Gardez les composants atomiques simples et focalisés sur une seule responsabilité
2. Utilisez les décorateurs pour modifier l'apparence plutôt que d'ajouter des classes de maniere unitaire
3. Documentez chaque nouveau composant dans son propre README
4. Suivez les conventions de nommage établies
5. Assurez-vous que chaque composant est réutilisable et indépendant 
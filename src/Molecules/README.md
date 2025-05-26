# Composants Moléculaires

Les composants moléculaires sont des groupes fonctionnels composés de plusieurs atomes travaillant ensemble. Ils représentent des patterns d'interface utilisateur plus complexes et réutilisables.

## Organisation

Les composants moléculaires sont structurés en sous-dossiers, chacun contenant :
- Le composant moléculaire principal
- Les composants atomiques spécifiques (si nécessaire)
- La documentation détaillée du composant

## Composants disponibles

- **Audio** : Lecteur audio enrichi avec métadonnées et contrôles avancés
- **Cover** : Bannières et images de couverture avec superposition de texte
- **Details** : Composants dépliables avec contenu détaillé
- **Embed** : Intégration de contenus externes (vidéos, cartes, etc.)
- **Gallery** : Galeries d'images avec navigation et lightbox
- **Image** : Compositions d'images avec légendes et métadonnées
- **MediaText** : Blocs de texte avec média associé
- **NavigationLink** : Éléments de navigation enrichis
- **NavigationSubmenu** : Sous-menus de navigation
- **PostTemplate** : Templates d'articles avec mise en page complète
- **Quote** : Citations stylisées avec attribution
- **SocialLinks** : Groupes de liens vers les réseaux sociaux
- **Table** : Tableaux de données avec fonctionnalités avancées

## Composition des molécules

Les molécules sont construites en combinant plusieurs atomes. Par exemple, une molécule `Quote` peut être composée de :
- Un atome `Paragraph` pour le texte de la citation
- Un atome `Heading` pour l'auteur
- Un atome `Link` pour la source

```php
class Quote {
    private $content;    // Paragraph
    private $author;     // Heading
    private $source;     // Link
    
    // ...
}
```

## Bonnes pratiques

1. Maintenez une cohérence visuelle entre les composants moléculaires
2. Assurez-vous que chaque molécule a un objectif clair et spécifique
3. Évitez les dépendances inutiles entre les molécules
4. Documentez les interactions entre les atomes qui composent la molécule
5. Testez les molécules dans différents contextes d'utilisation
6. Privilégiez la composition à l'héritage

## Extensibilité

Les composants moléculaires peuvent être étendus via :
- L'ajout de nouveaux atomes
- L'utilisation de décorateurs sur les atomes existants
- La configuration des propriétés spécifiques à la molécule

Chaque extension doit être documentée dans le README du composant concerné. 
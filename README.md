# La puissance de Joomla! 5 : Développez des services Web pour vos composants!

Ce dépôt stocke le code de mon atelier sur le développement d'extensions Joomla! 5 à [JoomlaDay FR 2024] (https://joomladay.fr) intitulé : **La puissance de Joomla! 5 : Développez des services Web pour vos composants!**.

Dans cette session, j'ai montré comment développer un service web pour un composant Joomla! 5 bien structuré.

Cette session a suivi la structure de mon livre sur le développement d'extensions pour Joomla! 5 intitulé _[Developing Extensions For Joomla! 5](https://developingextensionsforjoomla5.com/?utm_source=gh-jdes24)_.

<a href="https://developingextensionsforjoomla5.com/" style="text-align: center"><img alt="Couverture du livre 'Developing Extensions For Joomla! 5'" src="https://developingextensionsforjoomla5.com/images/cover.webp" align="center" width="150"></a>

## Télécharger la présentation en pdf

- [Ajoutez le service web](https://carcam.github.io/webservices-jd24fr/slides/webservices-jd24fr.pdf)

## Comment utiliser ce dépôt

### Code du composant

Le code du composant est situé dans la branche _main_ de ce dépôt et est divisé dans les balises suivantes, suivant les différentes étapes de ma session :

- _v1.0.0_ : C'est la version initiale du composant.
- _webservices-plugin_ : Cette itération ajoute un plugin _webservice_ qui route notre extension. Il utilise la nouvelle architecture de Joomla 5.
- _api_ : Cette itération ajoute le code minimal pour créer la logique du service web.

### Fichiers de présentation

Les fichiers de présentation sont situés dans la branche _slides_ de ce dépôt. Plus précisément dans le dossier _slides_.

La présentation est réalisée avec [Marp](https://marp.app/) et les fichiers sources se trouvent dans le dossier _slides/src_.

La commande pour générer la présentation avec _Marp-cli_ est la suivante :

```bash
marp --html webservices-jd24fr.md --theme-set book.css --pdf-notes --allow-local-files --output slides/webservices-jd24fr.pdf
```

### Pour en savoir plus

En plus des références sur le dernier écran de chaque présentation, vous pouvez trouver plus d'informations sur le développement d'extensions pour Joomla! 5 à l'adresse suivante :

- [Developing Extensions For Joomla! 5 Book Blog](https://developingextensionsforjoomla5.com/blog?utm_source=gh-jdfr24)
- Dépôt de code du livre Developing Extensions For Joomla! 5 sur GitHub](https://github.com/PacktPublishing/Developing-Extensions-for-Joomla-5/)

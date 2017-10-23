mod_multijscss
==============

 [EDIT] Updated for Joomla 3.8.1

Ce module pour Joomla permet d'intégrer des fichiers JS et CSS - et leurs images - dans un article.

Les fichiers JS et CSS et le dossier images sont localisés dans le répertoire media/mod_multijscss/

Le placement du loadposition est expliqué dans le descriptif du module. 

Il est indispensable d'encapsuler les scripts, comme ceci par exemple, pour un script d'usage :


```javascript
jQuery(function($){
		$(document).ready(function() {
			// code ici

				
			});

	});
```

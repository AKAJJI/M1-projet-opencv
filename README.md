# M1-projet-opencv
Ce projet sert a detecter les hooligans qui sont bannis des terrains qui essaient de se faufiller avec la foule pour entrer regarder un match dans les stades.
l'architecture de l'application web est :

            ---Home.php------>Entrainer le modele(ca permet d'entrainer le modele faces-train.py avec les images qu'on insert dans le dossier hooligans.
            |         |------>Identifier les hooligans(actuellement j'ai pas trouver comment faire marcher le script python faces.py sur le web).
            |
            |
            |--Insert the bad guy.php---> pout inserer les images des hooligans.

les scripts pythons : 
            faces-train.py: il permet d'entrainer le modele et de generer un fichier trainner.yml.
            faces.py: il utilise le fichier trainner.yml generer par faces-train.py pour identifier les hooligans par la camera a l'aide de la reconnaissance facial et qui envoie une alerte sonnore quand un hooligan est detecté.
 
 
Actuellement les scripts marchent et detectent les hooligans qui on a inserer leurs images(il faut inserer beaucoup d'images pour bien entrainer les donnees et avoir de bon resultats de reconnaissances).
Nb: faut avoir importer opencv , pillow, pickle pour que le scripte python marche.
            


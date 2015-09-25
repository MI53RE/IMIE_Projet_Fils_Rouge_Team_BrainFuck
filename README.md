# IMIE_Projet_Fils_Rouge_Team_BrainFuck

Rappel d'utilisation:

  cloner le repo git:
  - copier le lien pour cloner le git
  - ouvrir un cmd (ou terminal) dans le dossier ou vous souhaitez cloner le repo
  - dans le shell taper 'git clone ' + collez le liens
  - pressez 'enter'
  - si tout se passe bien, vous devriez voir le chemin suivant: 'lettre du lecteur':\Chemin\Vers\Le\Repo(master)
  - pour commencer à travailler penser à changer de branche!!: "git checkout 'nom de la branche'(sans les guillemets)"
  - si la branche n'existe pas encore, il faut rajouter -b avant le nom de la branche
  - vous devriez voir le chemin suivant: 'lettre du lecteur':\Chemin\Vers\Le\Repo(nom de la branche)


  Envoyer des données sur le repo:
  - ouvrir votre cmd/terminal dans votre dossier local
  - verifier bien que vous n'êtes pas sur master
  - taper 'git status', s'affiche en rouge la liste des fichiers/dossier qui ont été modifier depuis le dernier pull
  - avant tout le reste faite ce qui suis:
  - tapez 'git rm -f -r app/cache' 
  - tapez 'git rm -f -r app/logs' 
  - tapez 'git checkout app/config/parameters.yml' 
  - pour chaque fichiers/dossier taper 'git add 'chemine\vers\fichier\nom-fichier''
  - une fois fini retaper 'git status' tout devrait être vert (sinon revenez à l'étape precedente)
  - si tout est bon vous pouvez taper 'git commit -m "message du commit (TOUJOURS EXPLIQUER LE CONTENU DU COMMIT)"'
  - enfin faite un 'git push'
  


Participants:

- Eric Leguen
- Frédéric Alizard
- Mathieu Gilet
- Théo Lounissi
- Vincent Crombez

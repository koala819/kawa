# Machine à Café Connectée ☕

## Architecture

- **backend/** : API PHP (Slim) + processus continu (worker)
- **frontend/** : Dashboard Next.js
- **docker-compose.yml** : Orchestration des services

## Lancement rapide 🚀

```bash
docker-compose up --build
```

- Accès API : http://localhost:8080
- Accès Front : http://localhost:3000

## Fonctionnalités prévues
- Ajouter des commandes de café
- Piloter la machine (démarrer, arrêter, réinitialiser)
- Suivi en temps réel de l'état et de la file d'attente

## Choix techniques
- **PHP Slim** pour la simplicité de l'API
- **Next.js** pour un front moderne et réactif
- **Docker** pour l'isolation et la portabilité

## Prochaines étapes
- Implémenter la logique métier côté back-end
- Connecter le front à l'API
- Améliorer l'UI/UX
FROM php:8.2-cli

# Copier le code de ton projet dans le conteneur
COPY . /app
WORKDIR /app

# Exposer le bon port
EXPOSE 10000

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]

FROM php:8.2-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install zip pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Node.js y npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Configurar Apache
RUN a2enmod rewrite
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Directorio de trabajo
WORKDIR /var/www/html

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar archivos del proyecto
COPY . .

# Configurar permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Instalar dependencias, generar key, cachear configs y build assets en un solo RUN
RUN composer install --optimize-autoloader --no-dev

#RUN php artisan key:generate

RUN php artisan config:cache

RUN php artisan route:cache

RUN php artisan view:cache

RUN npm install

RUN npm run build
 
# Exponer puerto 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
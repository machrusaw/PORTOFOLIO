# Gunakan base image PHP dengan Apache
FROM php:8.2-apache

# Install dependensi sistem dan ekstensi PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip git unzip \
    libonig-dev libxml2-dev curl && \
    docker-php-ext-install pdo pdo_mysql gd

# Aktifkan mod_rewrite untuk Laravel routing
RUN a2enmod rewrite

# Pastikan PHP handler aktif
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf
RUN echo "<FilesMatch \.php$>\n\tSetHandler application/x-httpd-php\n</FilesMatch>" > /etc/apache2/conf-available/php-handler.conf && \
    a2enconf php-handler

# Copy semua source code ke /var/www/html
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Build frontend kalau pakai Vite
RUN npm install && npm run build

# Set permission
RUN chmod -R 775 storage bootstrap/cache

# Set DocumentRoot ke folder public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Izinkan .htaccess Laravel
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Expose port
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]

# Use official PHP image with Apache
FROM php:8.2-apache

# Enable mysqli extension for MySQL support
RUN docker-php-ext-install mysqli

# Copy all project files to web root
COPY . /var/www/html/

# Expose port 80 for Render
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]

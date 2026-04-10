# Use official PHP with Apache
FROM php:8.2-apache

# Copy project files to Apache root
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
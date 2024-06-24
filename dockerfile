# Use an official PHP runtime as a base image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your PHP application files to the container's working directory
COPY . .

# Install any dependencies your PHP application might need (example: mysqli for database connectivity)
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Expose port 80 to allow incoming traffic to the web server
EXPOSE 80

# Specify how to start your PHP application (this example assumes index.php is your entry point)
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]

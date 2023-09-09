# Use an official Nginx image as the base image
FROM nginx:latest

# Remove the default Nginx configuration file
RUN rm /etc/nginx/conf.d/default.conf

# Copy your custom Nginx configuration to the container
COPY nginx/default.conf /etc/nginx/conf.d/

# Set the working directory to /var/www/html (the default Laravel directory)
WORKDIR /var/www/html

# Expose port 80 for Nginx
EXPOSE 80

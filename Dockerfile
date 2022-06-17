FROM php:7.4.29-cli

# Install software
RUN apt-get update && apt-get upgrade -y && \
        apt-get install -y nodejs \
        unzip \
        curl \
        zip \
        git \
        npm

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html/ld

# Clone git project
RUN git clone https://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@github.com/alari777/ld-tasks-1.git .

# Install dependens and update autoload routes
RUN composer update && \
        composer dump-autoload --optimize

CMD php --version && \
        composer --version
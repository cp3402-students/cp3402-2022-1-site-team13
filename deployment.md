# How to create Mysql Database
    Log in to the AWS console to create an RDS instance for creating a wordpress database

# Engine options
    Engine type --- mysql
    Version --- 5.7.38
    Templates -- product

# Credentials Settings
    config account and password
    Public access --- yes

# Security Group
    allow 3306 port  access

# Connection Link
    wordpress-database.cs72ud9ah0of.us-east-1.rds.amazonaws.com

# Create Database
    create database wordpress


# Create App Runtime
    Log in to the AWS console to create an instance of Elastic Beanstalk to host the wordpress runtime environment

# Application name
    wordpress-pro

# Platform
    php

# Platform branch
    php-7.4

# Application code
    Upload your code

# Upload Wordpress source code file to Elastic Beanstalk

# Create Elastic Beanstalk app

# Wordpress Config
    http://wordpresspro-env.eba-qfq7p8re.us-east-1.elasticbeanstalk.com/wordpress

# Database Config

# Site Config
    site title --- Labyrinth Consulthing

# Setup Complete 
    login link --- http://wordpresspro-env.eba-qfq7p8re.us-east-1.elasticbeanstalk.com/wordpress/wp-login.php

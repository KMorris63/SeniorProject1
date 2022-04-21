#!/bin/bash

export HOME=/home/pi
cd /
cd var/www/html/SeniorProject1/Mirror1/presentation/handlers
pm2 restart updateDisplay

FROM node:16-alpine3.11

# this is a development Dockerfile
# and is not intended for production use
WORKDIR /var/www/ui

COPY package*.json /var/www/ui/
RUN npm install

COPY . /var/www/ui

EXPOSE 3000
CMD [ "node", "server.js" ]
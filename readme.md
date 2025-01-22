## Set up dev

- Make sure Docker is installed and running
- Choose a port that is still available (use the command `docker ps` too see which are in use)
- Run the following command from the root of your project, with your chosen port (like 9001 or higher) and your chosen name:

```
docker run -d --name [NAME] --network --restart always kikdev -p [PORT]:80 -v "$PWD":/var/www/html kiksaus/kikdev-phalcon5
```

- Now visit this URL, with your chosen port: http://localhost:[PORT]/
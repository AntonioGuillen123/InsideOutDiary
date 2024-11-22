## Title: InsideOutDiary








# Welcome to our InsideOut project! 👋

We have decided in our team To keep track of our day to day life on an emotional level, we are going to create in Laravel a Journal where we can insert every day what we are feeling with InsideOut characters.

## 🚀 About Us
We are a team of 4 people passionate about programming and we are currently doing a training in Front-End and Back-end Development. Our goal is to learn all the basics and logic of development and to strengthen skills.


# Installation
- Clone repository
```
git clone https://github.com/AntonioGuillen123/InsideOutDiary.git
```

## Install the dependencies 
- Install the composer

```
composer install
```
- Install Nodejs

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, you uncomment the DB connection lines which are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)


```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=insideout_db
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```
- Execute migrations  
```
php artisan migrate
```
- How to run the Laravel server  
```
php artisan serve
```

- if you want to run all this in development environment run the following command  
```
npm run dev
```





    
## 🛠 Skills
- PHP,
- CSS,
- Composer,

 
## Tech Stack

Framework: Laravel

Server: Xampp, Apache, Nodejs
Database: Mysql


## Running Tests

To run tests, run the following command

```bash
  php artisan test --env=testing
```


## Contributing

Contributions are always welcome!

For some CSS styles we will use the colour palette of https://draculatheme.com/.
thank you very much for everything!

## Authors

- [AntonioGuillent123](https://github.com/AntonioGuillen123)  
- [Inma0711](https://github.com/Inma0711/Inma0711)
- [soyJenifer](https://github.com/soyJenifer)
- [issamchlf](https://github.com/issamchlf/issamchlf)
- [LeonKeneddy86](https://github.com/Leonkeneddy86)










## Social Media

- http://www.linkedin.com/in/antonio-guill%C3%A9n-905b941ab
- http://www.linkedin.com/in/inma-gonz%C3%A1lez-aguilar-a406aa2b3
- http://www.linkedin.com/in/jenifer-moyano-sanrom%C3%A1-143788333
- http://www.linkedin.com/in/issam-chellaf-1099352bb
- www.linkedin.com/in/jonathantorreblanca

## Emails from Authors
- antonioguillengarcia123@gmail.com
- inmagonzalez045@gmail.com
- jenifermoyanosanroma@gmail.com
- issamchellaf734@gmail.com
- jonathan19.jtv@gmail.com

## Journal API

This API allows you to manage journal entries. It provides CRUD (Create, Read, Update, Delete) operations for journal entries.

## EndPoints
1. Get all diary entries

- Method: GET
- URL: /journal
- Description: Retrieves a - - list of all journal entries.
- Response:
- Code 200: Returns an array of journal entries.
2. Obtain a specific entry

- Method: GET
- URL: /journal/{id}
- Description: Retrieves a specific journal entry by its ID.
- Parameters:
- id: ID of the journal entry.
Response:
- Code 200: Returns the journal entry.
- Code 404: If the entry is not found.

3. Create a new entry
- Method: POST
- URL: /journal
- Description: Creates a new journal entry.
- Body of the request:
title: Title of the entry.
content: Content of the entry.
- Response:
- Code 201: Returns the created entry.
- Code 400: If there are validation errors.

4. Update an existing entry
- Method: PUT
- URL: /journal/{id}
- Description: Updates an existing journal entry.
Parameters:
- id: ID of the journal entry.
Request body:
- title: Updated title of the entry.
- content: Updated content of the entry.
Response:
- Code 200: Returns the updated entry.
- Code 404: If the entry is not found.
- Code 400: If there are validation errors.

5. Delete an entry
- Method: DELETE
- URL: /journal/{id}
- Description: Deletes a specific journal entry by its ID.
- Parameters:
- id: ID of the journal entry.
Response:
- Code 204: If the entry is successfully deleted.
- Code 404: If the entry is not found.

## Example of applications

- Get all entries
```
curl -X GET http://tu-api.com/journal
```
- Create a new entry
```
curl -X POST http://tu-api.com/journal -H ‘Content-Type: application/json’ -d ‘{’title‘: “My first entry”, “content”: “Today was a great day.”}’
```

- Update an entry
```
curl -X PUT http://tu-api.com/journal/1 -H ‘Content-Type: application/json’ -d ‘{’title‘: “Updated entry”, “content”: “I have changed my mind.”}’
```

- Delete an entry
```
curl -X DELETE http://tu-api.com/journal/1
```

## Notes

- Make sure your server is up and running and that the database is configured correctly.

# 👋 Welcome to our InsideOut project! 👋

We have decided in our team To keep track of our day to day life on an emotional level, we are going to create in Laravel a Journal where we can insert every day what we are feeling with InsideOut characters.

![image](https://github.com/user-attachments/assets/8068ba3b-9f4e-4cf5-b7e7-70a912fd60d7)

## 🚀 About Us
We are a team of 4 people passionate about programming and we are currently doing a training in Front-End and Back-end Development. Our goal is to learn all the basics and logic of development and to strengthen skills.


## ▶️💻 Installation
- Clone repository
```
git clone https://github.com/AntonioGuillen123/InsideOutDiary.git
```

- Install Composer dependencies

```
composer install
```
- Install Nodejs dependencies

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

- If you want to run all this in development environment run the following command  
```
npm run dev
```
 
## 🛠 Tech Stack
- Languages: Html, Css, Blade
- Framework: Laravel
- Server: Xampp, Apache, Nodejs
- Database: Mysql
- Others: Composer


## 🏃‍♂️🧪 Running Tests

To run tests, run the following command

```bash
  php artisan test --env=testing
```

If everything is correct, everything should be OK.

![image](https://github.com/user-attachments/assets/7296bebd-75ac-41fe-be83-7d528ad7ad65)

A folder called coverage-report will also have been generated.

<img width="830" alt="Tests coverage report" src="https://github.com/user-attachments/assets/fccd80fd-6a54-4695-97b5-cc198126da90">


## 🤝 Contributing

Contributions are always welcome!

For some CSS styles we will use the colour palette of https://draculatheme.com/.
thank you very much for everything!

## 🌐 Our Journal API

This API allows you to manage journal entries. It provides CRUD (Create, Read, Update, Delete) operations for journal entries.

### EndPoints

#### 1 Get all diary entries

```http
  GET /api/journal
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json


#### 2 Get a diary by ID

```http
  GET /api/journal/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id` | `string` | **Required**. Journal ID |

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 3 Create a new entry

```http
  POST /api/journal
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `entry` | `string` | **Required**. Description of entry |
| `emotion` | `string` | **Required**. URL of image |

#### 4 Update an existing entry by ID

```http
  PUT /api/journal/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id` | `string` | **Required**. Journal ID |

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `entry` | `string` | **Required**. Description of entry |
| `emotion` | `string` | **Required**. URL of image |

#### 4 Delete an entry by ID

```http
  DELETE /api/journal/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id` | `string` | **Required**. Journal ID |


## 🔧 Example of applications

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

## 📜 Notes

- Make sure your server is up and running and that the database is configured correctly.

## ✍️ Authors
- **Antonio Guillén:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)]([https://github.com/tu-usuario](https://github.com/AntonioGuillen123))
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/antonio-guill%C3%A9n-905b941ab)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:antonioguillengarcia123@gmail.com)

- **Inma Gonzalez:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Inma0711)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/inma-gonz%C3%A1lez-aguilar-a406aa2b3)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:inmagonzalez045@gmail.com)

- **Jenifer Moyano:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/soyJenifer)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/jenifer-moyano-sanrom%C3%A1-143788333)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:jenifermoyanosanroma@gmail.com)

- **Issam Chellaf:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/issamchlf)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/issam-chellaf-1099352bb)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:issamchellaf734@gmail.com)

- **Jonathan Torreblanca:** [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Leonkeneddy86)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/jonathantorreblanca)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:jonathan19.jtv@gmail.com)

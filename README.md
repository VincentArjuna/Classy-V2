
# Classy V2

Another version of my Freelance Project.


## Authors

- [@VincentArjuna](https://www.github.com/VincentArjuna)


## Run Locally

Clone the project

```bash
  git clone https://github.com/VincentArjuna/Classy-V2.git
```

Go to the project directory

```bash
  cd classy-v2
```

-- Don't forget to copy and rename .env.example to .env
```bash
  cp .env.example .env
```

Install dependencies

```bash
  composer install
  npm install
```

Migrate database & Seed database

```bash
  php artisan migrate:fresh --seed
```

Start the server (you need 2 terminal on Windows)

1st Terminal:
```bash
  npm run dev
```

2nd Terminal:
```bash
  php artisan serve
```

## Local Credential

username = admin

password = admin
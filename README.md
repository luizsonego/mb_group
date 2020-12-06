* cone o repositorio

> Crie o arquivo .env
``` cp .env.example .env ```

> Instale as dependencias necessarias
``` composer install ``` 

> inicia o auth no projeto
``` php artisan ui vue --auth ``` 

> instala as dependencias node
``` npm install && npm run dev ``` 


criei um banco com nome ´mb´ (ou outro qualquer, configure-o no arquivo .env)

> para criar o banco de dados baseado nas migration
``` php artisan migrate ``` 

> Popula o banco com dados do faker
``` php artisan db:seed ```  

* inicie um servidor web para ver projeto em execução

Ja possui um usuario cadastrado 

```
Email:email@example.com
Senha:password
```

### Projeto com o basico do laravel 
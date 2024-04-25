# AV1 Arquitetura de Aplicações Web

Aplicação desenvolvida para a AV1 do professor [João Aramuni](https://github.com/joaopauloaramuni)

[Requisitos](requisitos.pdf)

A aplicação possui um docker compose e o dockerfile do projeto, bastando utilizar o comando

```bash
docker compose up -d --build
```

Isso irá iniciar a api na porta local 8080, e um dashboard do mongodb na porta local 8081

A maior parte dos arquivos de regra de negócio está na pasta `App`, os principais sendo:

[Controller](app/Http/Controllers/NewsReleasesController.php)  
[Service IBGE](app/Services/IbgeService.php)  
[Models Para Salvar no banco em](app/Models/)  
[Rotas em](routes/api.php)  

#### ATIVIDADE – API DE CATÁLOGO DE GAMES 

A Level Up Games é uma loja de jogos que vende pelo site e pelo Instagram. O problema: cada canal usa uma lista diferente, e na última promoção a loja vendeu jogos que já estavam esgotados. Sua missão é criar a API que vai centralizar o catálogo, usando como base a API de produtos feita em aula.

**1) BANCO DE DADOS**
Crie o banco "levelup" e a tabela "jogos" com as colunas:
id, titulo, plataforma, genero, desenvolvedora, ano_lancamento, preco, estoque
Atenção aos tipos: ano e estoque são números inteiros; o preço tem casas decimais.

![alt text](<Captura de tela 2026-09-18 090211.png>)

/// {
  "titulo": "Minecraft",
  "plataforma": "PC",
  "genero": "Sandbox",
  "desenvolvedora": "Mojang",
  "ano_lancamento": 2011,
  "preco": 99.90,
  "estoque": 25
}
{
  "titulo": "Fortnite",
  "plataforma": "PC",
  "genero": "Battle Royale",
  "desenvolvedora": "Epic Games",
  "ano_lancamento": 2017,
  "preco": 0.00,
  "estoque": 50
}

{
  "titulo": "GTA V",
  "plataforma": "PC",
  "genero": "Ação",
  "desenvolvedora": "Rockstar Games",
  "ano_lancamento": 2013,
  "preco": 119.90,
  "estoque": 15
}

{
  "titulo": "Sonic X Shadow Generations",
  "plataforma": "PS5",
  "genero": "Ação e Plataforma",
  "desenvolvedora": "Sega",
  "ano_lancamento": 2024,
  "preco": 199.90,
  "estoque": 10
}

{
  "titulo": "Marvel's Spider-Man 2",
  "plataforma": "PS5",
  "genero": "Ação e Aventura",
  "desenvolvedora": "Insomniac Games",
  "ano_lancamento": 2023,
  "preco": 249.90,
  "estoque": 12
}

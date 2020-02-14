# Projeto C10
O Ciência é 10! é uma iniciativa da CAPES que integra o programa Ciência na Escola, do MEC, MCTIC e CNPq. Trata-se de um curso de especialização para professores graduados que estão atuando no sistema público de ensino e dando aulas de ciências nos anos finais do Ensino Fundamental, ou seja, do 6º ao 9º ano. É realizado na modalidade ensino a distância (EAD), com garantia da CAPES e certificação do MEC, junto com as Instituições Públicas de Ensino parceiras.

O Ciência é 10! é um dos diversos cursos da Universidade Aberta do Brasil (UAB), um sistema gerido pela CAPES para integrar e articular as universidades públicas com os governos municipais, estaduais e federal, a fim de facilitar o acesso dos professores do Ensino Básico de todo o País a uma formação continuada e de qualidade.

Site do projeto: https://c10.capes.gov.br/

Neste repositório temos a imagem do curso Ciência é 10, pronto para uso. Abaixo temos dois roteiros para instalação: usando o docker-compose o usando os comandos manuais do docker.


## Instalação 

## Instalação Docker Swarm

```sh     
    $ git clone https://github.com/akirax28/moodlec10.git 
    $ cd moodlec10
    $ docker stack deploy -c docker-compose.yml moodle10
```

## Acesso
- porta 8003 

create database pokemonssnyderalan;

use pokemonsSnyderAlan;

create schema pokemonsSnyderAlan;

create table listaPokemon(
	foto varchar(500) not null,
	nombre varchar(40) not null,
    ataque varchar(40) not null,
    tipo varchar(40) not null,
    primary key (nombre)
);

insert into listaPokemon (foto, nombre, ataque, tipo)
	VALUES
    ('https://vignette.wikia.nocookie.net/es.pokemon/images/e/e3/Squirtle.png/revision/latest/scale-to-width-down/350?cb=20160309230820', 'Squirtle', 'AguaLoca', 'Agua'),
    ('https://vignette.wikia.nocookie.net/es.pokemon/images/7/77/Pikachu.png/revision/latest/scale-to-width-down/350?cb=20150621181250', 'Pikachu', 'Electrovolt', 'Electrico'),
    ('https://vignette.wikia.nocookie.net/es.pokemon/images/4/43/Bulbasaur.png/revision/latest/scale-to-width-down/350?cb=20170120032346', 'Bulbasaur', 'Veneno', 'Planta');
    


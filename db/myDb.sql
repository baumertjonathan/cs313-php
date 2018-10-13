CREATE DATABASE myDB;

\c database

CREATE TABLE public.floors
(
	location VARCHAR(100) PRIMARY KEY,
	shine_score int,
	scuff_score int,
	dirt_score int,
	tile_score int 
);
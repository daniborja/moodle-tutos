# Desarrollo de filtros

## Las carpetas y archivos basicos de 1 filtro
- --- Los   filters    son otro tipo de Plugin en Moodle q se los crea en     /filter
  - Sus archivos Obligatorios/Required son:   `filter.php, version.php, /lang`
	- El dir del filtro debe llevar el nombre recomendado x moodle, todo english, sin mayus


	- --- Para crear nuestro 1r    Filter    debemos crear su dir en   /filter    con sus required files
  	- Creamos los 2 archivos basicos:
    	- version.php
    	- /lang
		- Dejando el     filter.php     para el prox video


		-- URL:
			- Filter Plugins:			https://moodledev.io/docs/apis/plugintypes/filter
			- Output API:					https://moodledev.io/docs/apis/subsystems/output







## Filtro: el archivo filter.php
- --- Nos falta el 1    Required File    de este tipo de plugins, q es el filter.php
  - La Logica de Programacion principal de los filtros se encuentra en el archivo    filter.php
  - Debemos Crear 1    Class    con notacion Frankenstyle, extendido de la classe     moodle_text_filter
  - Despues de hacer la instalacion, debemos Activar el filtro


	- -- Creamos el     `filter.php`     en el root del plugin
  	- Esta classe extiende de    moodle_text_filter
  	- Tiene 1 method      filter()     q retorna el modified text


		-- URL:
			- FIlter Plugin:		https://moodledev.io/docs/apis/plugintypes/filter







## Filtro: parámetros generale





















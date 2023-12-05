# Buscador

<p> 
	Este es un proyecto básico sobre un buscador. Puedes buscar por categorias o por proudctos. 
	Cada **card** de productos, se listan la categoria a la que pertenece el producto, al darle click,
	se mostrarán todos los productos de dicha categoría.
</p>

## Si usas laragon

<p> 
	Puede que tengas problemas con los archivos temporales cuando intentes de subir
	algun foto o archivo. Para solucionar el problema, debes seguir estos pasos: 
</p>

<ol>
	<li>
			Abre el archivo **php.ini**
	</li>
	<li>
			Descomenta **upload_tmp_dir**
	</li>
	<li>
			Asignale **C:/laragon/tmp**		
	</li>
</ol>


## Archivo .env

Antes que nada, debes crear un archivo **.env** en la raíz del proyecto para poder agregar la 
configuración a la base de datos. Los campos que debes agregar son:

```
- DB_CONNECTION
- DB_HOST
- DB_USER
- DB_PASSWORD
- DB_DATABASE
```

## Migraciones

<p>
	Para probar el proyecto, **primero deber correr las migraciones** para la creación de la base de datos.
</p>

``` php artisan migrate ```

Al ejecutar este comando, se realizarán las tablas con las relaciones correspondientes.
Si deseas realizar algún cambio antes de su creación, puedes ir al directorio: **database/migrations**. 
Allí se guardan todas la migraciones.


## Factorys y Seeders

<p>
	También puede usar los factorys y los seeders para datos de prueba para que echez un vistazo rápido
	al proyecto.
</p>

``` php artisan db:seed ```

o también

``` php artisan migrate:fresh --seed ```

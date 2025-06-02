# AbeledoSoutoRuben_TFC
Trabajo de Fin de Ciclo – Desarrollo de Aplicaciones Web
Autor: Rubén Abeledo Souto

Nombre del Proyecto: PlayFit
                                                                — CONCEPTO DE IDEA PRINCIPAL —

Mi idea de TFC es crear una web que ayude a promover el deporte con la ayuda de ejercicios y musica.

                                                                    — EXPLICACIÓN —

Playfit es una página web donde el usuario va a poder registrarse o iniciar sesión con formularios, una vez dentro, 
el usuario podra elegir si crear una rutina diaria con la ayuda de una API para crear ejercicios por cada día de la semana según la parte de el cuerpo 
que elija. También podra seleccionar una parte de el cuerpo para que con la ayuda de otra Api genere playlist de spotify 
y filtrar los ejercicios alojados en la BD según la parte de el cuerpo.

Este proyecto cuenta con las siguientes tecnologías:
    -Base de datos propia insertada en el código con consultas SQL
    -HTML: Vistas de el trabajo.
    -CSS: Estilos de las vistas
    -PHP: Controladores y vistas.
    -JS: Validaciones de formularios y trabajo con las apis.
    -Docker: Despliegamiento de el proyecto
    -GitHub: Control de versiones
    
                                                                        — DESPLEGAMIENTO DEL PROYECTO —
                                                                    
1->Bajar el contenido de el repositorio ( Ya contiene los archivos de docker para ejecutarlo seguir los pasos.)
2->Tener la aplicacion Docker Dektop descargada y ejecutada.
3->Abrir el cmd desde la carpeta de el trabajo en este caso AbeledoSoutoRuben_TFC
4->Ejecutar el siguiente comando ( docker-compose up --build -d ).
	4.1->Se descargara lo necesario para crear el contenedor y las herramientas necesarias.
	4.2->Comando para parar el docker ( docker-compose down )
5->Una vez se descargue todo el contenido se podra entrar como ( http://localhost:8888 )
6->Para cambiar el nombre de dominio realizar los siguientes pasos.
	6.1->Ejecutar el cmd como administrador
	6.2->Ejecutar el siguiente comando en caso de windows ( notepad C:\Windows\System32\drivers\etc\hosts )
	6.3->Añadir la siguiente linea ( 127.0.0.1       playfit.com ) y en caso de que tenga # eliminarlo.
	6.4->Guardar el archivo
7->Entrar en el navegador con el enlace  ( http://playfit:8888 )
8->Para entrar en la base de datos seria el siguiente enlace ( http://playfit:8080  o http://localhost:8080)
	8.1->Usuario: root
	8.2->Contraseña: (sin contraseña)

    
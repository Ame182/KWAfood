#KWA food - Proyecto Final

## Descripción:
KWA food es un nuevo restaurant de comida venezolana en la ciudad de Santiago de Chile.
Para darlos a conocer, vamos a crear una página web, donde las personas puedan conocer sus origenes, menú y ubicación.

## Accesos:
Acceso al Wordpress de la página:
User:KWAfood
Passw: --< Y*GVuF@fUd&JQQQ$@8 >-- 
Repositorio: https://github.com/Ame182/KWAfood


###El despliegue del Proyecto
-El proyecto fue constantemente commiteado en un **repositorio Git** https://github.com/Ame182/KWAfood

-La base de datos del proyecto será impòrtado al repositorio una vez terminado el proyecto.

-El proyecto inicio desde cero con una plantilla **HTML**
	Se utilizaron todas las etiqueras y semántica aprendida en el curso.
	El meta viewport está incorporado en el Header por lo que se activa en cada página.

-Todos los estilos fueron creados desde cero en **CSS**
	Se utilizaron distintas reglas de position, display y media query personalizados.

-La página contiene interacciones que fueron creadas en **javascrip y Jquery**
	Uso de 3 plugins de Jquery:
	AOS: para la animación de los titulos
	Staurate: que se creo de cero para alterar las imagenes antes de ser clickeadas
	Promociones: al hacer click se despliega la promoción de cada día, esto fue una solicion que se agrego al ACF para que el cliente lo modifique cuando quiera.
	**API:** Implementamos una API que llama comentarios desde la pagina Jsonplaceholder que es una REST api para que los desarrolladores hagan pruebas, en este caso la utilizamos para simular que los comentarios se publican en la pagina de manera inmediata.

-Toda la estructura del HTML tuvo base en las etiquetas y sistema de grillas de **bootstrap**
	el **Formulario** vino de los estilos bootstrap y se integró con el plugin contact form 7
	la pagina es responsiva

-La integración a **wordpress**
	Se realizaron **2 custom post Type** (uno para la carta y otro para las imagenes de la galeria)
	Se creó una seccion de **blog** donde llegan todas las entradas
	Se creó una **galeria** de imagenes apoyada de un plugin
	Se utilizaron varios **Template part** para simplificar el codigo de la página principal, ejemplo el blog se llama desde la carpeta _includdes_ . 
	Tiene dos **page template** distintos Pagina inicial y blog.
	El tema de wordpress tiene 3 **plugins** para su base (NextGen, ACF y Contact Form 7). Luego para el SEO y seguridad implementaremos más.

-Información del sitio:
	Todo el texto del sitio es original y real del restaurante. Vayan y visitenlo que la comida es deliciosa.

-Tuvimos problemas con los servidores, a la hora de intentar subir a produccion el FTP no conectaba, despues de miles intentos logramos conectarlo, pero al intentar entrar en el cPanel no pudimos avanzar porque mostraba pagina con adevertencia.


Saludos!

Información (1 ptos)
Creación de contenido original, sin uso de Lorem Ipsum (0.5 pto) 


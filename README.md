# DELI-DIET THEME
Tema desarrolado a medida para Delidiet

## Tecnologías
* Html5
* Css3
* Foundation
* Postcss
* Php
* Gulp
* Browser Sync
* Sass
* Responsive Design

## Plugins
Plugins comunmente utilizados son:

* [Contact Form 7 *](http://contactform7.com/docs/)
* [Wordpress SEO by Yoast *](https://yoast.com/wordpress/plugins/seo/api/)
* [sendgrid *](https://wordpress.org/plugins/sendgrid-email-delivery-simplified/)
* [Advanced Custom Fiels](http://www.advancedcustomfields.com/resources/)

## Instalación
Para instalar todas las dependencias ejecutar:

    yarn ó npm install

Esto nos baja foundation y las dependencias gulp que utilizamos en este tema y creará la carpeta `node_modules`.

## Configuración del proyecto
El tema maneja varias maneras de administrar los assets

* [Gulp](http://gulpjs.com/)
* [Prepros](https://prepros.io/)

La ruta donde estan los archivosc scss,js, y mjml es:

   resources/assets/

De momento está configurado para usar foundation, después de haber instalado las dependencias con `npm install` ejecutamos el siguiente comando para compilar los assets:

   `gulp`

> Antes de continuar debes entrar al archivo `gulpfile.js` y cambiar la url de tu sitio en desarrollo para que browser sync trabaje correctamente

comando para trabajar en desarrollo

   `npm run dev`

para producción:

   `npm run production`

#### COPYRIGHT & LICENSE

This theme is based on BlankSlate theme
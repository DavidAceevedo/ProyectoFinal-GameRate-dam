GameRate 🎮 - Catálogo de Videojuegos

Descripción del Dominio

GameRate es una aplicación web diseñada para la gestión de un catálogo personal de videojuegos. El sistema permite a los usuarios explorar títulos, consultar sus detalles técnicos (categoría y plataformas), leer opiniones de otros usuarios y gestionar su propia lista de deseos personalizada. El objetivo principal es centralizar la información de videojuegos y permitir una interacción social mediante reseñas.

Funcionalidades Principales

    Gestión de Videojuegos (CRUD): Registro, listado, edición y borrado de títulos.

    Sistema de Usuarios: Registro e inicio de sesión seguro.

    Categorización: Clasificación de juegos por géneros mediante una relación ManyToOne.

    Soporte Multiplataforma: Selección de múltiples plataformas por juego mediante relación ManyToMany.

    Lista de Deseos: Espacio personal donde los usuarios guardan juegos que quieren adquirir (Entidad con metadatos como fecha de agregado).

    Sistema de Opiniones: Los usuarios pueden dejar reseñas en cada juego.

Tecnologías Utilizadas

    Framework: Symfony 6.x / 7.x.

    ORM: Doctrine para la persistencia de datos.

    Motor de Plantillas: Twig para vistas dinámicas y reutilizables.

    Base de Datos: MySQL/MariaDB.

    Estilos: Bootstrap 5 para el diseño responsivo.

Instrucciones de Instalación

    Clonar el repositorio:
    Bash

    git clone <url-de-tu-repositorio>
    cd ProyectoFinal-GameRate-dam

    Instalar dependencias:
    Bash

    composer install

    Configurar base de datos: Edita el archivo .env.local y configura tu DATABASE_URL:
    Plaintext

    DATABASE_URL="mysql://usuario:password@127.0.0.1:3306/gamerate?serverVersion=8.0"

    Ejecutar migraciones:
    Bash

    php bin/console doctrine:migrations:migrate

    Cargar datos iniciales (Opcional): Ejecuta los comandos SQL proporcionados en la memoria para rellenar Categorías y Plataformas.

    Iniciar el servidor:
    Bash

    symfony serve

Credenciales de Prueba

    Usuario: test@test.com

    Contraseña: 123456 (o la que hayas definido)

# CitaMe: Sistema de Gestión de Consultas Médicas

**CitaMe** es una solución técnica desarrollada en **Laravel 8** para la administración y agendamiento de citas en entornos de salud. El proyecto centraliza la interacción entre tres actores principales (Administradores, Médicos y Pacientes), garantizando la integridad de los datos y una navegación fluida. Este repositorio sirve como base práctica para el curso de desarrollo disponible en el canal **ReyTech**.

---

### Arquitectura y Stack Tecnológico

El sistema se basa en el patrón **Modelo-Vista-Controlador (MVC)**, implementando una lógica de negocio desacoplada para evitar controladores saturados y facilitar el mantenimiento.

* **Framework Principal:** Laravel 8 (PHP).
* **Gestión de Datos:** MySQL con relaciones polimórficas para la entidad de usuarios.
* **Interfaz de Usuario:** Motores de plantilla Blade con integración de componentes para visualización de datos.
* **Seguridad:** Implementación de **Middlewares** para el control de acceso y protección de rutas según el nivel de privilegios.

---

### Bloque Funcional: Gestión de Roles y Permisos

La plataforma utiliza un sistema de control de acceso basado en roles (**RBAC**) para segregar las funcionalidades:

* **Administradores:** Supervisión de la infraestructura, gestión de especialidades médicas y acceso a reportes de rendimiento global.
* **Doctores:** Control de agenda personal, gestión de estados de citas (aprobación o cancelación) y registro de pacientes en su base de datos privada.
* **Pacientes:** Proceso de reserva de citas basado en la disponibilidad real de los especialistas y seguimiento de su historial médico.

---

### Bloque Funcional: Lógica de Citas y Seguimiento

El núcleo del sistema gestiona el flujo completo de la consulta médica:

* **Agendamiento:** Selección por especialidad, profesional y horarios disponibles.
* **Información de Diagnóstico:** Inclusión de **Notas de Síntomas** por parte del paciente para optimizar el tiempo de consulta.
* **Análisis Estadístico:** Visualización de métricas mediante gráficos que permiten analizar la carga de trabajo por médico y el flujo de pacientes.

---

### Guía de Instalación y Despliegue Local

Para configurar el entorno de desarrollo, ejecute los siguientes comandos en su terminal:

1. **Obtención del Código y Dependencias:**
```bash
git clone https://github.com/StevenU21/CitaMe.git
cd CitaMe
composer install

```


2. **Configuración del Entorno:**
Renombre el archivo de ejemplo y configure sus variables de conexión a la base de datos en el archivo `.env`.
```bash
cp .env.example .env
php artisan key:generate

```


3. **Migraciones y Datos de Prueba:**
Cree la estructura de tablas y cargue los registros iniciales (seeders) necesarios para probar los roles:
```bash
php artisan migrate --seed

```


4. **Ejecución:**
Inicie el servidor local y acceda a través de `http://localhost:8000`.
```bash
php artisan serve

```



---

### Enlaces de Referencia

* **Curso Completo:** [Lista de reproducción en YouTube](https://www.google.com/search?q=https://www.youtube.com/watch%3Fv%3DXTwtZfxiIlg%26list%3DPLA2JPb2b8Fg50FoUoycL7czIvwci_uppd)
* **Canal del Autor:** [ReyTech en YouTube](https://www.youtube.com/@devReyTech)

---

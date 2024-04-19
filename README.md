# Proyecto Patrones de Diseño

Este repositorio es una colección de implementaciones prácticas de diversos patrones de diseño, creada con el propósito de servir como material de referencia y práctica para desarrolladores interesados en mejorar su comprensión y habilidad en el uso de patrones de diseño en proyectos de software.

## Tipos de Patrones de Diseño

Los patrones de diseño se clasifican generalmente en tres categorías principales. A continuación, se describen brevemente cada una y se proporciona información específica sobre los patrones que se han implementado en este proyecto.

### Creacionales

Los patrones creacionales proporcionan mecanismos de creación de objetos que aumentan la flexibilidad y la reutilización del código existente.

#### Builder

El patrón Builder se utiliza para permitir la creación de una variedad de objetos complejos desde un objeto fuente. Separa la construcción de un objeto complejo de su representación, de modo que el mismo proceso de construcción puede crear diferentes representaciones.

Para más detalles, puedes consultar la documentación específica de este patrón [aquí](https://designpatternsphp.readthedocs.io/en/latest/Creational/Builder/README.html).

### Estructurales

Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes, mientras se mantiene la flexibilidad y eficiencia de la estructura.

### Comportamentales

Estos patrones se ocupan de la comunicación efectiva y la asignación de responsabilidades entre objetos.

#### Specification

El patrón Specification se utiliza para crear una especificación que determine si un objeto cumple ciertos criterios. Es útil para separar la lógica de selección de objetos de la lógica de negocio en sí, permitiendo una mayor flexibilidad y reusabilidad de las reglas de selección.

Para más detalles, puedes consultar la documentación específica de este patrón [aquí](https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Specification/README.html).

## Buenas Prácticas Implementadas

En este proyecto, hemos aplicado una serie de buenas prácticas en el desarrollo de software, que incluyen:

- **Arquitectura Hexagonal:** Asegura la separación de la lógica de negocio del framework y del cliente que se utiliza, permitiendo una mayor portabilidad y facilidad de prueba del negocio.
- **Microservicios:** Facilita la descomposición de la lógica de negocio en pequeños servicios autónomos que se pueden desarrollar, desplegar y escalar de forma independiente.
- **Principios SOLID:** Son seguidos para mejorar la mantenibilidad y la escalabilidad del software.
- **Clean Code:** Se promueve la escritura de código que es fácil de entender y de mantener.

## Tecnologías Utilizadas

- **PHP 8.2:**
- **POO (Programación Orientada a Objetos):** Utilizada para estructurar el código de manera que sea flexible y reutilizable.

Este README.md se irá actualizando a medida que se implementen nuevos patrones y prácticas.


## Ejecución de Pruebas

Para ejecutar las pruebas automatizadas de este proyecto, asegúrate de estar dentro del contenedor Docker apropiado y ejecuta el siguiente comando:

```
composer test
```

## Fuente y otros enlaces
Ejemplos y e ideas sacadas del curos patrones de diseño de [Codenip](https://www.youtube.com/@Codenip) y su lista de reproducción Patrones de diseño
[aquí](https://www.youtube.com/playlist?list=PLWpsZlKx38t84dV5eKAD5VAeiOe4A0UKT)

También puedes obtener más recursos de programación en el blog [Notas Web](https://notasweb.me/blog/)
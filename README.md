# Proyecto Patrones de Diseño

Este repositorio es una colección de implementaciones prácticas de diversos patrones de diseño, creada con el propósito de servir como material de referencia y práctica para desarrolladores interesados en mejorar su comprensión y habilidad en el uso de patrones de diseño en proyectos de software.

## Tipos de Patrones de Diseño

Los patrones de diseño se clasifican generalmente en tres categorías principales. A continuación, se describen brevemente cada una y se proporciona información específica sobre los patrones que se han implementado en este proyecto.

### Creacionales

Los patrones creacionales proporcionan mecanismos de creación de objetos que aumentan la flexibilidad y la reutilización del código existente.

#### Builder

El patrón de diseño Builder es un patrón creacional que se utiliza para construir objetos complejos paso a paso. A diferencia de otros patrones creacionales, como Factory y Abstract Factory, que crean el objeto de una sola vez, el patrón Builder permite la creación del objeto paso a paso bajo el control del director (una clase que orquesta la construcción del objeto).

##### Funcionamiento del patrón Builder:
- Separación del proceso de construcción: El patrón Builder desacopla la construcción de un objeto complejo de su representación, de modo que el mismo proceso de construcción puede crear diferentes representaciones según las necesidades.
- Builder (Constructor): Esta es una interfaz que define todos los pasos necesarios para construir un objeto complejo. Cada paso está diseñado para manejar un aspecto del objeto a construir, como construir las paredes o instalar el techo en una casa.
- Concrete Builder (Constructor Concreto): Clases que implementan la interfaz Builder y proporcionan implementaciones específicas de los pasos definidos en Builder. Cada versión del Builder construye una parte del objeto de manera diferente o aporta variaciones en la construcción.
- Director: Una clase que define el orden en el que se llaman los pasos de construcción, sin preocuparse por los detalles específicos de los productos o cómo se ensamblan los componentes. Esto permite producir diferentes tipos y representaciones de un objeto empleando el mismo proceso de construcción.
- Producto: El objeto complejo que se construye. El Builder devuelve el producto como resultado de los esfuerzos de construcción.

Creación de objetos complejos: Utilizado cuando hay necesidad de crear estructuras complejas, como un documento con formato o un menú de comidas, donde cada parte del objeto puede necesitar diferentes procesos de construcción o configuraciones.
Control sobre el proceso de construcción: Permite variar el producto interno durante la construcción por parte de diferentes builders concretos.

##### Ventajas:
Permite variar un producto sin alterar la clase director.
Encapsula el código para la construcción y representación: el código de construcción está aislado del código que utiliza el objeto.
Proporciona control sobre el proceso de construcción.
##### Desventajas:
Puede complicar el código debido a la creación de múltiples clases adicionales.
Los clientes deben conocer las diferencias entre los builders para poder elegir y configurar el correcto.

Para más detalles, puedes consultar la documentación específica de este patrón [aquí](https://designpatternsphp.readthedocs.io/en/latest/Creational/Builder/README.html).

---

#### Singleton
El patrón de diseño Singleton es un patrón creacional que tiene como objetivo garantizar que una clase tenga una única instancia en toda la aplicación y proporcionar un punto de acceso global a dicha instancia. Se utiliza comúnmente para controlar el acceso a recursos compartidos, como conexiones a bases de datos o configuraciones del sistema.

##### Funcionamiento del patrón Singleton:
- Instancia Única: Asegura que una clase solo tenga una única instancia en la ejecución de un programa. Esto se logra proporcionando un método estático en la clase que devuelve siempre la misma instancia.
- Acceso Global: Ofrece un acceso global a esa instancia única a través de un método estático. Esto facilita el acceso desde cualquier parte del código sin necesidad de pasar la instancia de manera explícita.
- Control de Creación: El constructor de la clase se define como privado o protegido para evitar que otras clases puedan instanciarla directamente. Esto ayuda a controlar cómo y cuándo se accede a la instancia única.
##### Ventajas:
- Ahorro de recursos, ya que se evita la creación de múltiples instancias de una misma clase.
- Acceso controlado y centralizado a recursos o servicios compartidos.
##### Desventajas:
- Puede introducir un estado global en la aplicación, lo que hace que el código sea más difícil de entender y de probar.
- La implementación de Singleton en entornos multihilo puede requerir mecanismos adicionales para evitar problemas de concurrencia, lo que puede complicar el diseño.

Para más detalles, puedes consultar la documentación específica de este patrón [aquí](https://designpatternsphp.readthedocs.io/en/latest/Creational/Singleton/README.html).

---
---


### Estructurales

Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes, mientras se mantiene la flexibilidad y eficiencia de la estructura.

### Comportamentales

Estos patrones se ocupan de la comunicación efectiva y la asignación de responsabilidades entre objetos.

---

#### Specification

El patrón de diseño Specification es un patrón comportamental que permite encapsular la lógica de negocio que especifica si un objeto cumple con ciertos criterios. Este patrón se utiliza principalmente para la selección de objetos de acuerdo con un conjunto de atributos combinables y reutilizables, permitiendo de esta manera una gran flexibilidad en la definición de reglas sin comprometer el mantenimiento del código.
##### Funcionamiento del patrón Specification:
- Specification (Especificación): Esta es una interfaz que define un método isSatisfiedBy que toma un objeto candidato y devuelve un booleano indicando si el objeto cumple con la especificación.
- Concrete Specifications (Especificaciones Concretas): Clases que implementan la interfaz de especificación y representan reglas de negocio específicas. Cada una de estas clases encapsula una regla única.
- Combinación de Especificaciones: Las especificaciones pueden diseñarse para ser combinables, utilizando operaciones lógicas como AND, OR y NOT. Esto permite construir especificaciones complejas a partir de otras más simples sin alterar las clases existentes.

##### Ventajas:
- Reusabilidad: Las especificaciones individuales pueden ser reutilizadas a través del sistema sin replicación de código.
- Combinable: Al permitir combinaciones lógicas de especificaciones, se pueden crear reglas complejas a partir de reglas más simples, lo que mejora la mantenibilidad.
- Desacoplamiento: Reduce el acoplamiento entre el código que ejecuta la selección y las reglas reales que definen qué objetos son seleccionados.

##### Desventajas:
- Complejidad: La implementación de múltiples especificaciones y su combinación puede llevar a un aumento en la complejidad del diseño.
- Sobrecarga: Si no se implementa cuidadosamente, puede llevar a una sobrecarga en la evaluación de si los objetos cumplen con las especificaciones, especialmente si el conjunto de datos es grande.

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
Ejemplos y e ideas sacadas de la lista de reproducción, patrones de diseño de   

Canal => [Codenip](https://www.youtube.com/@Codenip)   
Lista => [aquí](https://www.youtube.com/playlist?list=PLWpsZlKx38t84dV5eKAD5VAeiOe4A0UKT)  

También puedes obtener más recursos de programación en el   
blog  => [Notas Web](https://notasweb.me/blog/)

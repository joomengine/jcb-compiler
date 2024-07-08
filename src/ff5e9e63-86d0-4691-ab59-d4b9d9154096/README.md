```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Plantuml (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**
> extends: ****
```uml
@startuml
class Plantuml  #Gold {
  + namespaceDiagram(string $namespace, string $classes) : string
  + classBasicDiagram(array $power, array $code) : string
  + classDetailedDiagram(array $power, array $code) : string
  - generatePropertiesPlantUML(array $properties, string $space) : string
  - generateDetailedMethodsPlantUML(array $methods, string $class_name) : array
  - generateBasicMethodsPlantUML(array $methods) : string
  - generateMethodArgumentsAndNotes(array $arguments, string $class_name, ...) : array
  - generateMethodNotes(array $method, string $class_name, ...) : array
  - generateNotesPlantUML(array $notes) : string
  - getAccessSign(string $access) : string
  - getClassTypeLable(string $type) : string
  - getClassTypeTag(string $type) : string
  - getClassColor(string $classType) : string
  - getNamespaceColor(int $namespaceDepth) : string
}

note right of Plantuml::namespaceDiagram
  Get a namespace diagram of a group of class

  since: 3.2.0
  return: string
end note

note left of Plantuml::classBasicDiagram
  Get a class basic diagram of a class

  since: 3.2.0
  return: string
end note

note right of Plantuml::classDetailedDiagram
  Get a class detailed diagram of a class

  since: 3.2.0
  return: string
end note

note left of Plantuml::generatePropertiesPlantUML
  Generate properties PlantUML

  since: 3.2.0
  return: string
end note

note right of Plantuml::generateDetailedMethodsPlantUML
  Generate detailed methods PlantUML

  since: 3.2.0
  return: array
end note

note left of Plantuml::generateBasicMethodsPlantUML
  Generate basic methods PlantUML

  since: 3.2.0
  return: string
end note

note right of Plantuml::generateMethodArgumentsAndNotes
  Generate method arguments and notes

  since: 3.2.0
  return: array
  
  arguments:
    array $arguments
    string $class_name
    string $method_name
    array $notes
end note

note left of Plantuml::generateMethodNotes
  Generate method notes

  return: array
  
  arguments:
    array $method
    string $class_name
    array $notes
end note

note right of Plantuml::generateNotesPlantUML
  Generate notes PlantUML

  since: 3.2.0
  return: string
end note

note left of Plantuml::getAccessSign
  Get the access sign based on the access level.

  since: 3.2.0
  return: string
end note

note right of Plantuml::getClassTypeLable
  Get the correct class type.

  since: 3.2.0
  return: string
end note

note left of Plantuml::getClassTypeTag
  Get the extra class type tag.

  since: 3.2.0
  return: string
end note

note right of Plantuml::getClassColor
  Get class color based on class type.

  since: 3.2.0
  return: string
end note

note left of Plantuml::getNamespaceColor
  Get namespace color based on namespace depth.

  since: 3.2.0
  return: string
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)


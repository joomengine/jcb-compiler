```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Readme (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power\Repos**
```uml
@startuml
class Readme  #Gold {
  # Power $power
  # Plantuml $plantuml
  + __construct(?Power $power = null, ?Plantuml $plantuml = null)
  + get(array $powers) : string
  - readmeBuilder($powers) : string
  - readmeModel(array $classes) : string
  - generateIndex(array $classes) : string
  - generateDiagramBucket(array $classes) : string
  - defineTypeOrder() : array
  - sortClasses(array $classes, array $typeOrder) : void
  - compareNamespace(array $a, array $b) : int
  - compareType(array $a, array $b, ...) : int
  - compareName(array $a, array $b) : int
  - generateNamespaceDiagram(string $current_namespace, string $diagrams) : string
  - indexLinkPower(string $power) : string
  - linkPowerRepo(string $power) : string
  - linkPowerCode(string $power) : string
  - linkPowerSettings(string $power) : string
  - linkPowerGuid(string $power) : string
}

note right of Readme::__construct
  Constructor.

  since: 3.2.0
end note

note left of Readme::get
  Get Super Power Readme

  since: 3.2.0
  return: string
end note

note right of Readme::readmeBuilder
  The readme builder

  since: 3.2.0
  return: string
end note

note left of Readme::readmeModel
  Sort and model the readme classes

  since: 3.2.0
  return: string
end note

note right of Readme::generateIndex
  Generate the index string for classes

  return: string
end note

note left of Readme::generateDiagramBucket
  Generate the diagram bucket string for classes

  return: string
end note

note right of Readme::defineTypeOrder
  Define the order of types for sorting purposes

  since: 3.2.0
  return: array
end note

note left of Readme::sortClasses
  Sort the flattened array using a single sorting function

  since: 3.2.0
  return: void
end note

note right of Readme::compareNamespace
  Compare the namespace of two classes

  since: 3.2.0
  return: int
end note

note left of Readme::compareType
  Compare the type of two classes

  since: 3.2.0
  return: int
  
  arguments:
    array $a
    array $b
    array $typeOrder
end note

note right of Readme::compareName
  Compare the name of two classes

  since: 3.2.0
  return: int
end note

note left of Readme::generateNamespaceDiagram
  Generate a namespace diagram string

  return: string
end note

note right of Readme::indexLinkPower
  Build the Link to the power in this repository

  since: 3.2.0
  return: string
end note

note left of Readme::linkPowerRepo
  Build the Link to the power in this repository

  since: 3.2.0
  return: string
end note

note right of Readme::linkPowerCode
  Build the Link to the power settings in this repository

  since: 3.2.0
  return: string
end note

note left of Readme::linkPowerSettings
  Build the Link to the power settings in this repository

  since: 3.2.0
  return: string
end note

note right of Readme::linkPowerGuid
  Build the Link with GUID text to the power in this repository

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


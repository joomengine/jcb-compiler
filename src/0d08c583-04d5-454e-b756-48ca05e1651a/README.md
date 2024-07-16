```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Main (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Readme**

```uml
@startuml
class Main << (F,LightGreen) >> #RoyalBlue {
  + get(array $items) : string
  - readmeBuilder($items) : string
  - readmeModel(array $classes) : string
  - generateIndex(array $classes) : string
  - defineTypeOrder() : array
  - sortClasses(array $classes, array $typeOrder) : void
  - compareNamespace(array $a, array $b) : int
  - compareType(array $a, array $b, ...) : int
  - compareName(array $a, array $b) : int
  - indexLinkPower(array $power) : string
  - linkPowerRepo(array $power) : string
  - linkPowerCode(array $power) : string
  - linkPowerSettings(array $power) : string
  - linkPowerSPK(array $power) : string
}

note right of Main::get
  Get Main Readme

  since: 3.2.0
  return: string
end note

note left of Main::readmeBuilder
  The readme builder

  since: 3.2.0
  return: string
end note

note right of Main::readmeModel
  Sort and model the readme classes

  since: 3.2.0
  return: string
end note

note left of Main::generateIndex
  Generate the index string for classes

  return: string
end note

note right of Main::defineTypeOrder
  Define the order of types for sorting purposes

  since: 3.2.0
  return: array
end note

note left of Main::sortClasses
  Sort the flattened array using a single sorting function

  since: 3.2.0
  return: void
end note

note right of Main::compareNamespace
  Compare the namespace of two classes

  since: 3.2.0
  return: int
end note

note left of Main::compareType
  Compare the type of two classes

  since: 3.2.0
  return: int
  
  arguments:
    array $a
    array $b
    array $typeOrder
end note

note right of Main::compareName
  Compare the name of two classes

  since: 3.2.0
  return: int
end note

note left of Main::indexLinkPower
  Build the Link to the power in this repository

  since: 3.2.0
  return: string
end note

note right of Main::linkPowerRepo
  Build the Link to the power in this repository

  since: 3.2.0
  return: string
end note

note left of Main::linkPowerCode
  Build the Link to the power settings in this repository

  since: 3.2.0
  return: string
end note

note right of Main::linkPowerSettings
  Build the Link to the power settings in this repository

  since: 3.2.0
  return: string
end note

note left of Main::linkPowerSPK
  Get the SuperPowerKey (SPK)

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0d08c583_04d5_454e_b756_48ca05e1651a---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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


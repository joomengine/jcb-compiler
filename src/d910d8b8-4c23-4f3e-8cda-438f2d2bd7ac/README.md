```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Factory (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
```uml
@startuml
abstract Factory  #Orange {
  # static $container
  # static $JoomlaVersion
  + {static} _(string $key) : mixed
  + {static} _J(string $key) : mixed
  + {static} getContainer() : Container
  # {static} createContainer() : Container
}

note right of Factory::_
  Get any class from the compiler container

  since: 3.2.0
  return: mixed
end note

note right of Factory::_J
  Get version specific class from the compiler container

  since: 3.2.0
  return: mixed
end note

note right of Factory::getContainer
  Get the global compiler container

  since: 3.2.0
  return: Container
end note

note right of Factory::createContainer
  Create a container object

  since: 3.2.0
  return: Container
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


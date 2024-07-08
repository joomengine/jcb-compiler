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
> extends: **ExtendingFactory**
```uml
@startuml
abstract Factory  #Orange {
  + {static} getKeys() : array
  + {static} _J(string $key) : mixed
  # {static} createContainer() : Container
}

note right of Factory::getKeys
  Get array of all keys in container

  since: 3.2.0
  return: array
end note

note right of Factory::_J
  Get version specific class from the compiler container

  since: 3.2.0
  return: mixed
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


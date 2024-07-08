```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Joomlamodule (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class Joomlamodule  #Gold {
  + register(Container $container) : void
  + getData(Container $container) : Data
  + getStructure(Container $container) : Structure
}

note right of Joomlamodule::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Joomlamodule::getData
  Get The Data Class.

  since: 3.2.0
  return: Data
end note

note right of Joomlamodule::getStructure
  Get The Structure Class.

  since: 3.2.0
  return: Structure
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


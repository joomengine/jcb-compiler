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
  Get the Joomla Module Data

  since: 3.2.0
  return: Data
end note

note right of Joomlamodule::getStructure
  Get the Joomla Module Structure Builder

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


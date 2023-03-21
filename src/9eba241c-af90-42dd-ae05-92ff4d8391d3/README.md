```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Joomlaplugin (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Joomlaplugin  #Gold {
  + register(Container $container) : void
  + getData(Container $container) : Data
  + getStructure(Container $container) : Structure
}

note right of Joomlaplugin::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Joomlaplugin::getData
  Get the Joomla Plugin Data

  since: 3.2.0
  return: Data
end note

note right of Joomlaplugin::getStructure
  Get the Joomla Plugin Structure Builder

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


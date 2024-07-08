```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Compiler (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class Compiler  #Gold {
  + register(Container $container) : void
  + getConfig(Container $container) : Config
  + getRegistry(Container $container) : Registry
  + getTable(Container $container) : Table
}

note right of Compiler::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Compiler::getConfig
  Get the Compiler Configurations

  since: 3.2.0
  return: Config
end note

note right of Compiler::getRegistry
  Get the Compiler Registry

  since: 3.2.0
  return: Registry
end note

note right of Compiler::getTable
  Get the Table

  since: 3.2.0
  return: Table
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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Templatelayout (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Templatelayout  #Gold {
  + register(Container $container) : void
  + getTemplatelayoutData(Container $container) : TemplatelayoutData
  + getAliasData(Container $container) : AliasData
}

note right of Templatelayout::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Templatelayout::getTemplatelayoutData
  Get the Compiler Templatelayout Data

  since: 3.2.0
  return: TemplatelayoutData
end note

note right of Templatelayout::getAliasData
  Get the Compiler Alias Data

  since: 3.2.0
  return: AliasData
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


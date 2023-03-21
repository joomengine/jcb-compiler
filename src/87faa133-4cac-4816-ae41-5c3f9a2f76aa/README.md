```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Customview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Customview  #Gold {
  + register(Container $container) : void
  + getCustomviewData(Container $container) : CustomviewData
  + getDynamicgetData(Container $container) : DynamicgetData
  + getDynamicgetSelection(Container $container) : DynamicgetSelection
}

note right of Customview::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Customview::getCustomviewData
  Get the Compiler Customview Data

  since: 3.2.0
  return: CustomviewData
end note

note right of Customview::getDynamicgetData
  Get the Compiler Dynamicget Data

  since: 3.2.0
  return: DynamicgetData
end note

note right of Customview::getDynamicgetSelection
  Get the Compiler Dynamicget Selection

  since: 3.2.0
  return: DynamicgetSelection
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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Dashboard (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**
> extends: ****
```uml
@startuml
class Dashboard << (F,LightGreen) >> #RoyalBlue {
  # Registry $registry
  # Component $component
  # CMSApplication $app
  + __construct(?Registry $registry = null, ?Component $component = null, ...)
  + set() : void
}

note right of Dashboard::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Registry $registry = null
    ?Component $component = null
    ?CMSApplication $app = null
end note

note right of Dashboard::set
  Set the Dynamic Dashboard

  since: 3.2.0
  return: void
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


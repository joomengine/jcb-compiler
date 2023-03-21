```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Adminviews (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Adminviews  #Gold {
  # Adminview $admin
  # Registry $registry
  # Config $config
  + __construct(?Adminview $admin = null, ?Registry $registry = null, ...)
  + set(object $item) : void
}

note right of Adminviews::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Adminview $admin = null
    ?Registry $registry = null
    ?Config $config = null
end note

note right of Adminviews::set
  Set admin view data

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


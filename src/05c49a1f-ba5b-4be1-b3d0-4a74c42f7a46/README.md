```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Dynamicget**
```uml
@startuml
class Data  #Gold {
  # array $guiMapper
  # Config $config
  # Registry $registry
  # EventInterface $event
  # Customcode $customcode
  # Dispenser $dispenser
  # Gui $gui
  # Dynamicget $dynamic
  # $db
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + get(array $ids, string $view_code, ...) : ?array
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?EventInterface $event = null
    ?Customcode $customcode = null
    ?Dispenser $dispenser = null
    ?Gui $gui = null
    ?Dynamicget $dynamic = null
end note

note right of Data::get
  Get Dynamic Get Data

  since: 3.2.0
  return: ?array
  
  arguments:
    array $ids
    string $view_code
    string $context
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


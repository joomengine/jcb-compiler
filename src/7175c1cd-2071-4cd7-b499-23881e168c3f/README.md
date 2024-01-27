```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Library**
```uml
@startuml
class Data  #Gold {
  # Config $config
  # Registry $registry
  # Customcode $customcode
  # Gui $gui
  # FieldData $field
  # Filesfolders $filesFolders
  # $db
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + get(int $id) : object|bool
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?FieldData $field = null
    ?Filesfolders $filesFolders = null
end note

note right of Data::get
  Get Media Library Data and store globally in registry

  since: 3.2.0
  return: object|bool
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


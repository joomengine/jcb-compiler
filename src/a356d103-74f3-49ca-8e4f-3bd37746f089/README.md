```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Customcode (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
> extends: ****
```uml
@startuml
class Customcode  #Gold {
  # array $views
  # Dispenser $dispenser
  + __construct(?Dispenser $dispenser = null)
  + update(int $id, object $field, ...) : void
}

note right of Customcode::__construct
  Constructor

  since: 3.2.0
end note

note right of Customcode::update
  Update field customcode

  since: 3.2.0
  return: void
  
  arguments:
    int $id
    object $field
    string|null $singleViewName = null
    string|null $listViewName = null
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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Name (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
```uml
@startuml
class Name  #Gold {
  # Registry $registry
  # array $unique
  # Placeholder $placeholder
  # UniqueName $uniqueName
  + __construct(?Placeholder $placeholder = null, ?UniqueName $uniqueName = null, ...)
  + get(array $field, ?string $listViewName = null, ...) : string
}

note right of Name::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Placeholder $placeholder = null
    ?UniqueName $uniqueName = null
    ?Registry $registry = null
end note

note right of Name::get
  Get the field's actual name

  since: 3.2.0
  return: string
  
  arguments:
    array $field
    ?string $listViewName = null
    string $amicably = ''
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


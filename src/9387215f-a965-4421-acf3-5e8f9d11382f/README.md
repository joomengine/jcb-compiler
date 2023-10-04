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
  # array $unique
  # Placeholder $placeholder
  # UniqueName $uniquename
  # CategoryOtherName $categoryothername
  + __construct(Placeholder $placeholder, UniqueName $uniquename, ...)
  + get(array $field, ?string $listViewName = null, ...) : string
}

note right of Name::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Placeholder $placeholder
    UniqueName $uniquename
    CategoryOtherName $categoryothername
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


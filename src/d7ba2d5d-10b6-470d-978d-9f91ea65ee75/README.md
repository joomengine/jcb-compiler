```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Field (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
> extends: ****
```uml
@startuml
class Field  #Gold {
  # Data $data
  # Name $name
  # TypeName $typeName
  # UniqueName $uniqueName
  + __construct(?Data $data = null, ?Name $name = null, ...)
  + set(array $field, ?string $singleViewName = null, ...) : void
}

note right of Field::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Data $data = null
    ?Name $name = null
    ?TypeName $typeName = null
    ?UniqueName $uniqueName = null
end note

note right of Field::set
  set Field details

  since: 3.2.0
  return: void
  
  arguments:
    array $field
    ?string $singleViewName = null
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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Model (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**
```uml
@startuml
class Model << (F,LightGreen) >> #Green {
  + value(mixed $value, string $field, ...) : mixed
  # validateBefore(mixed $value, ?string $field = null, ...) : bool
  # validateAfter(mixed $value, ?string $field = null, ...) : bool
  # getTable() : string
}

note right of Model::value
  Model the value
Example: $this->value(value, 'field_key', 'table_name');

  since: 3.2.0
  return: mixed
  
  arguments:
    mixed $value
    string $field
    ?string $table = null
end note

note right of Model::validateBefore
  Validate before the value is modelled

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    ?string $field = null
    ?string $table = null
end note

note right of Model::validateAfter
  Validate after the value is modelled

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    ?string $field = null
    ?string $table = null
end note

note right of Model::getTable
  Get the current active table

  since: 3.2.0
  return: string
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


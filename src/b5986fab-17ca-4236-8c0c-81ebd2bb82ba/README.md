```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldsetDynamic (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class FieldsetDynamic << (F,LightGreen) >> #RoyalBlue {
  # FieldAsString $fieldasstring
  + __construct(FieldAsString $fieldasstring)
  + get(array $fields, string $langView, ...) : mixed
}

note right of FieldsetDynamic::__construct
  Constructor.

  since: 3.2.0
end note

note right of FieldsetDynamic::get
  build field set

  since: 3.2.0
  return: mixed
  
  arguments:
    array $fields
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $dbkey
    bool $build = false
    int $returnType = 1
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


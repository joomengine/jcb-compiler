```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldAsString (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class FieldAsString << (F,LightGreen) >> #RoyalBlue {
  # FieldDynamic $fielddynamic
  # Xml $xml
  + __construct(FieldDynamic $fielddynamic, Xml $xml)
  + get(array $field, array $view, ...) : string
}

note right of FieldAsString::__construct
  Constructor.

  since: 3.2.0
end note

note right of FieldAsString::get
  Get field as a string (no matter the build type)

  since: 3.2.0
  return: string
  
  arguments:
    array $field
    array $view
    int $viewType
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $dbkey
    bool $build = false
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


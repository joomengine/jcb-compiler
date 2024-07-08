```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldDynamic (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class FieldDynamic << (F,LightGreen) >> #RoyalBlue {
  # Name $name
  # TypeName $typename
  # Attributes $attributes
  # Groups $groups
  # FieldNames $fieldnames
  # Field $field
  # Builders $builders
  # Layout $layout
  + __construct(Name $name, TypeName $typename, ...)
  + get(array $field, array $view, ...) : mixed
}

note right of FieldDynamic::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Name $name
    TypeName $typename
    Attributes $attributes
    Groups $groups
    FieldNames $fieldnames
    Field $field
    Builders $builders
    Layout $layout
end note

note right of FieldDynamic::get
  Get the Dynamic field and build all it needs

  since: 3.2.0
  return: mixed
  
  arguments:
    array $field
    array $view
    int $viewType
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $dbkey
    bool $build
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


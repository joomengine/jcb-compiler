```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldString (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class FieldString << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Field $field
  # Groups $groups
  # Name $name
  # TypeName $typename
  # Attributes $attributes
  # CustomFieldTypeFile $customfieldtypefile
  # Counter $counter
  + __construct(Config $config, Language $language, ...)
  + get(string $setType, array $fieldAttributes, ...) : string
}

note right of FieldString::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Field $field
    Groups $groups
    Name $name
    TypeName $typename
    Attributes $attributes
    CustomFieldTypeFile $customfieldtypefile
    Counter $counter
end note

note right of FieldString::get
  Create a field using string manipulation

  since: 3.2.0
  return: string
  
  arguments:
    string $setType
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    array|null $optionArray
    ?array $custom = null
    string $taber = ''
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


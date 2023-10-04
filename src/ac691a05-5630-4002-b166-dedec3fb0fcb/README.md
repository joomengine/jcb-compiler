```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldXML (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class FieldXML << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Field $field
  # Groups $groups
  # Name $name
  # TypeName $typename
  # Attributes $attributes
  # Xml $xml
  # CustomFieldTypeFile $customfieldtypefile
  # Counter $counter
  + __construct(Config $config, Language $language, ...)
  + get(string $setType, array $fieldAttributes, ...) : \stdClass
}

note right of FieldXML::__construct
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
    Xml $xml
    CustomFieldTypeFile $customfieldtypefile
    Counter $counter
end note

note right of FieldXML::get
  Create a field with simpleXMLElement class

  since: 3.2.0
  return: \stdClass
  
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


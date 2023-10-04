```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class FieldsetXML (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class FieldsetXML << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Placeholder $placeholder
  # Language $language
  # Event $event
  # Permission $permission
  # FieldDynamic $fielddynamic
  # FieldNames $fieldnames
  # AccessSwitch $accessswitch
  # MetaData $metadata
  # Layout $layout
  # Counter $counter
  # Xml $xml
  + __construct(Config $config, Placeholder $placeholder, ...)
  + get(array $view, string $component, ...) : string
}

note right of FieldsetXML::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Language $language
    Event $event
    Permission $permission
    FieldDynamic $fielddynamic
    FieldNames $fieldnames
    AccessSwitch $accessswitch
    MetaData $metadata
    Layout $layout
    Counter $counter
    Xml $xml
end note

note right of FieldsetXML::get
  Get a fieldset

  since: 3.2.0
  return: string
  
  arguments:
    array $view
    string $component
    string $nameSingleCode
    string $nameListCode
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


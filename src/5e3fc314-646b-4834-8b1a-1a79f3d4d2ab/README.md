```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsEncryption (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class ConfigFieldsetsEncryption << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Component $component
  # ConfigFieldsets $configfieldsets
  # Customfield $customfield
  + __construct(Config $config, Language $language, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsEncryption::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Component $component
    ConfigFieldsets $configfieldsets
    Customfield $customfield
end note

note right of ConfigFieldsetsEncryption::set
  Set Encryption Config Fieldsets

  since: 3.2.0
  return: void
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


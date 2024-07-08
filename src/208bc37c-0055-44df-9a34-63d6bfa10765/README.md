```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsCustomfield (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class ConfigFieldsetsCustomfield << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Customfield $customfield
  # ConfigFieldsets $configfieldsets
  + __construct(Config $config, Language $language, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsCustomfield::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Customfield $customfield
    ConfigFieldsets $configfieldsets
end note

note right of ConfigFieldsetsCustomfield::set
  Set Custom Control Config Fieldsets

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


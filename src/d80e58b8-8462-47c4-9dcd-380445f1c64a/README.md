```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsEmailHelper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class ConfigFieldsetsEmailHelper << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Component $component
  # ConfigFieldsets $configfieldsets
  # Customfield $customfield
  + __construct(Config $config, Language $language, ...)
  + set(string $lang) : void
   vdm_dkim()
}

note right of ConfigFieldsetsEmailHelper::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Component $component
    ConfigFieldsets $configfieldsets
    Customfield $customfield
end note

note right of ConfigFieldsetsEmailHelper::set
  Set Email Helper Config Fieldsets

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


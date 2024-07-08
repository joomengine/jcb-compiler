```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsGroupControl (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class ConfigFieldsetsGroupControl << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # FieldGroupControl $fieldgroupcontrol
  # ConfigFieldsets $configfieldsets
  # ExtensionsParams $extensionsparams
  # Customfield $customfield
  + __construct(Config $config, Language $language, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsGroupControl::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    FieldGroupControl $fieldgroupcontrol
    ConfigFieldsets $configfieldsets
    ExtensionsParams $extensionsparams
    Customfield $customfield
end note

note right of ConfigFieldsetsGroupControl::set
  Set Group Control Config Fieldsets

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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsUikit (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class ConfigFieldsetsUikit << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # ConfigFieldsets $configfieldsets
  # ExtensionsParams $extensionsparams
  # Customfield $customfield
  + __construct(Config $config, Language $language, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsUikit::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    ConfigFieldsets $configfieldsets
    ExtensionsParams $extensionsparams
    Customfield $customfield
end note

note right of ConfigFieldsetsUikit::set
  Set Uikit Config Fieldsets

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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsGooglechart (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class ConfigFieldsetsGooglechart << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # ConfigFieldsets $configfieldsets
  # Customfield $customfield
  # ExtensionsParams $extensionsparams
  + __construct(Config $config, Language $language, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsGooglechart::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    ConfigFieldsets $configfieldsets
    Customfield $customfield
    ExtensionsParams $extensionsparams
end note

note right of ConfigFieldsetsGooglechart::set
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


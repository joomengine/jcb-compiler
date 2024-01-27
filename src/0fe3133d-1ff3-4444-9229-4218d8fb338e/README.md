```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsGlobal (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class ConfigFieldsetsGlobal << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Language $language
  # Component $component
  # Contributors $contributors
  # ConfigFieldsets $configfieldsets
  # ExtensionsParams $extensionsparams
  # Customfield $customfield
  + __construct(Config $config, Language $language, ...)
  + set(string $lang, string $authorName, ...) : void
}

note right of ConfigFieldsetsGlobal::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Language $language
    Component $component
    Contributors $contributors
    ConfigFieldsets $configfieldsets
    ExtensionsParams $extensionsparams
    Customfield $customfield
end note

note right of ConfigFieldsetsGlobal::set
  Set Global Config Fieldsets

  since: 3.2.0
  return: void
  
  arguments:
    string $lang
    string $authorName
    string $authorEmail
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


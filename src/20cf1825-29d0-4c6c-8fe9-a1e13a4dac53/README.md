```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsets (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class ConfigFieldsets << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Component $component
  # Event $event
  # Placeholder $placeholder
  # CPlaceholder $cplaceholder
  # ExtensionsParams $extensionsparams
  # Customfield $customfield
  # FieldAsString $fieldasstring
  # ConfigFieldsetsGlobal $configfieldsetsglobal
  # ConfigFieldsetsSiteControl $configfieldsetssitecontrol
  # ConfigFieldsetsGroupControl $configfieldsetsgroupcontrol
  # ConfigFieldsetsUikit $configfieldsetsuikit
  # ConfigFieldsetsGooglechart $configfieldsetsgooglechart
  # ConfigFieldsetsEmailHelper $configfieldsetsemailhelper
  # ConfigFieldsetsEncryption $configfieldsetsencryption
  # ConfigFieldsetsCustomfield $configfieldsetscustomfield
  + __construct(Config $config, Component $component, ...)
  + set(int $timer) : void
}

note right of ConfigFieldsets::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Component $component
    Event $event
    Placeholder $placeholder
    CPlaceholder $cplaceholder
    ExtensionsParams $extensionsparams
    Customfield $customfield
    FieldAsString $fieldasstring
    ConfigFieldsetsGlobal $configfieldsetsglobal
    ConfigFieldsetsSiteControl $configfieldsetssitecontrol
    ConfigFieldsetsGroupControl $configfieldsetsgroupcontrol
    ConfigFieldsetsUikit $configfieldsetsuikit
    ConfigFieldsetsGooglechart $configfieldsetsgooglechart
    ConfigFieldsetsEmailHelper $configfieldsetsemailhelper
    ConfigFieldsetsEncryption $configfieldsetsencryption
    ConfigFieldsetsCustomfield $configfieldsetscustomfield
end note

note right of ConfigFieldsets::set
  Set Config Fieldsets

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


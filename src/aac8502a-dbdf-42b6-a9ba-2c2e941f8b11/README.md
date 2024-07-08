```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ConfigFieldsetsSiteControl (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class ConfigFieldsetsSiteControl << (F,LightGreen) >> #RoyalBlue {
  # Component $component
  # ConfigFieldsets $configfieldsets
  # Customfield $customfield
  # HasMenuGlobal $hasmenuglobal
  # FrontendParams $frontendparams
  # Request $request
  + __construct(Component $component, ConfigFieldsets $configfieldsets, ...)
  + set(string $lang) : void
}

note right of ConfigFieldsetsSiteControl::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Component $component
    ConfigFieldsets $configfieldsets
    Customfield $customfield
    HasMenuGlobal $hasmenuglobal
    FrontendParams $frontendparams
    Request $request
end note

note right of ConfigFieldsetsSiteControl::set
  Set Site Control Config Fieldsets

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


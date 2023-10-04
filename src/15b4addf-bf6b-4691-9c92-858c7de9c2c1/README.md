```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class SiteFieldData (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class SiteFieldData << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # SiteFields $sitefields
  # SiteField $sitefield
  # array $decode
  # array $textareas
  + __construct(Config $config, SiteFields $sitefields, ...)
  + set(string $view, string $field, ...) : void
}

note right of SiteFieldData::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    SiteFields $sitefields
    SiteField $sitefield
end note

note right of SiteFieldData::set
  set the site field data needed

  return: void
  
  arguments:
    string $view
    string $field
    string $set
    string $type
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


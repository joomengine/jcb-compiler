```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Customtabs (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model\JoomlaFive**
```uml
@startuml
class Customtabs << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # BuilderCustomTabs $buildercustomtabs
  # Language $language
  # Placeholder $placeholder
  # Customcode $customcode
  + __construct(Config $config, BuilderCustomTabs $buildercustomtabs, ...)
  + set(object $item) : void
}

note right of Customtabs::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    BuilderCustomTabs $buildercustomtabs
    Language $language
    Placeholder $placeholder
    Customcode $customcode
end note

note right of Customtabs::set
  Set custom tabs

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


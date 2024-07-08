```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Layout (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
> extends: ****
```uml
@startuml
class Layout << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # OrderZero $orderzero
  # TabCounter $tabcounter
  # BuilderLayout $layout
  # MovedPublishingFields $movedpublishingfields
  # NewPublishingFields $newpublishingfields
  + __construct(Config $config, OrderZero $orderzero, ...)
  + set(string $nameSingleCode, string $tabName, ...) : void
}

note right of Layout::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    OrderZero $orderzero
    TabCounter $tabcounter
    BuilderLayout $layout
    MovedPublishingFields $movedpublishingfields
    NewPublishingFields $newpublishingfields
end note

note right of Layout::set
  set the layout builders

  since: 3.2.0
  return: void
  
  arguments:
    string $nameSingleCode
    string $tabName
    string $name
    array $field
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


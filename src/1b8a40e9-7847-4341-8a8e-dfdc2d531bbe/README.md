```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class InputButton (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field\JoomlaFour**
```uml
@startuml
class InputButton << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Placeholder $placeholder
  # Permission $permission
  + __construct(Config $config, Placeholder $placeholder, ...)
  + get(array $fieldData) : string
}

note right of InputButton::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Placeholder $placeholder
    Permission $permission
end note

note right of InputButton::get
  get Add Button To List Field Input (getInput tweak)

  since: 3.2.0
  return: string
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


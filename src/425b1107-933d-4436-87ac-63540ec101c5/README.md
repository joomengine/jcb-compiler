```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class AllowAdd (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaFour\Controller**
> extends: ****
```uml
@startuml
class AllowAdd << (F,LightGreen) >> #RoyalBlue {
  # String $component
  # Permission $permission
  # Dispenser $dispenser
  + __construct(Config $config, Permission $permission, ...)
  + get(string $nameSingleCode) : string
}

note right of AllowAdd::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Permission $permission
    Dispenser $dispenser
end note

note right of AllowAdd::get
  Get Allow Add Function Code

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


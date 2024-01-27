```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class AllowEdit (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaFour\Controller**
```uml
@startuml
class AllowEdit << (F,LightGreen) >> #RoyalBlue {
  # String $component
  # Permission $permission
  # Dispenser $dispenser
  # Category $category
  # CategoryOtherName $categoryothername
  + __construct(Config $config, Permission $permission, ...)
  + get(string $nameSingleCode, string $nameListCode) : string
}

note right of AllowEdit::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Permission $permission
    Dispenser $dispenser
    Category $category
    CategoryOtherName $categoryothername
end note

note right of AllowEdit::get
  Get Allow Edit Function Code

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


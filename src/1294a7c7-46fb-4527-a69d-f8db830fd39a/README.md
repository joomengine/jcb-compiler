```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Router (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**
```uml
@startuml
class Router << (F,LightGreen) >> #RoyalBlue {
  # Dispenser $dispenser
  # Request $request
  # Builder $builder
  # DefaultConstructor $defaultconstructor
  # ManualConstructor $manualconstructor
  # DefaultMethods $defaultmethods
  # ManualMethods $manualmethods
  + __construct(Dispenser $dispenser, Request $request, ...)
  + getConstructor() : string
  + getConstructorAfterParent() : string
  + getMethods() : string
  - init() : void
  - updateKeys() : void
}

note right of Router::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Dispenser $dispenser
    Request $request
    Builder $builder
    DefaultConstructor $defaultconstructor
    ManualConstructor $manualconstructor
    DefaultMethods $defaultmethods
    ManualMethods $manualmethods
end note

note right of Router::getConstructor
  Get Constructor Before Parent Call

  since: 3.2.0
  return: string
end note

note right of Router::getConstructorAfterParent
  Get Constructor After Parent Call

  since: 3.2.0
  return: string
end note

note right of Router::getMethods
  Get Methods

  since: 3.2.0
  return: string
end note

note right of Router::init
  Get Constructor Before Parent Call

  since: 3.2.0
  return: void
end note

note right of Router::updateKeys
  Update the keys

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


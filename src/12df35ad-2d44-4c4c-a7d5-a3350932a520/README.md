```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Groups (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
```uml
@startuml
class Groups << (F,LightGreen) >> #RoyalBlue {
  # $db
  + __construct()
  + check(string $type, string $option = 'default') : bool
  + types(array $groups = []) : ?array
  + typesIds(array $groups = []) : ?array
  + spacerIds() : ?array
}

note right of Groups::__construct
  Constructor

  since: 3.2.0
end note

note right of Groups::check
  Field Checker

  since: 3.2.0
  return: bool
end note

note right of Groups::types
  get the field types id -> name of a group or groups

  since: 3.2.0
  return: ?array
end note

note right of Groups::typesIds
  get the field types IDs of a group or groups

  since: 3.2.0
  return: ?array
end note

note right of Groups::spacerIds
  get the spacer IDs

  since: 3.2.0
  return: ?array
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


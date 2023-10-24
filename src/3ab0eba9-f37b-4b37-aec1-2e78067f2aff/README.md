```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Super (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power**
```uml
@startuml
class Super << (F,LightGreen) >> #RoyalBlue {
  # Grep $grep
  # Insert $insert
  # Update $update
  + __construct(Grep $grep, Insert $insert, ...)
  + init() : bool
  + reset(array $powers) : bool
  + load(string $guid, array $order = ['remote', 'local'], ...) : bool
  - insert(object $power) : bool
  - update(object $power) : bool
  - action(string $guid) : string
}

note right of Super::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Grep $grep
    Insert $insert
    Update $update
end note

note right of Super::init
  Init all power not found in database

  since: 3.2.0
  return: bool
end note

note right of Super::reset
  Reset the powers

  since: 3.2.0
  return: bool
end note

note right of Super::load
  Load a superpower

  since: 3.2.0
  return: bool
  
  arguments:
    string $guid
    array $order = ['remote', 'local']
    ?string $action = null
end note

note right of Super::insert
  Insert a superpower

  since: 3.2.0
  return: bool
end note

note right of Super::update
  Update a superpower

  since: 3.2.0
  return: bool
end note

note right of Super::action
  Get loading action

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


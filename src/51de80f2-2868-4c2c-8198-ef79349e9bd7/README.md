```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface SuperInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces**
```uml
@startuml
interface SuperInterface  #Lavender {
  + init() : bool
  + reset(array $powers) : bool
  + load(string $guid, array $order = ['remote', 'local'], ...) : bool
}

note right of SuperInterface::init
  Init all power not found in database

  since: 3.2.0
  return: bool
end note

note right of SuperInterface::reset
  Reset the powers

  since: 3.2.0
  return: bool
end note

note right of SuperInterface::load
  Load a superpower

  since: 3.2.0
  return: bool
  
  arguments:
    string $guid
    array $order = ['remote', 'local']
    ?string $action = null
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


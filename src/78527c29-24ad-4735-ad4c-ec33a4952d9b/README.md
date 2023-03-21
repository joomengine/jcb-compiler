```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Mappersingleinterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces**
```uml
@startuml
interface Mappersingleinterface  #Lavender {
  + isActive() : bool
  + set(string $key, mixed $value) : void
  + get(string $key) : mixed
  + exist(string $key) : bool
  + add(string $key, mixed $value) : void
  + remove(string $key) : void
}

note right of Mappersingleinterface::isActive
  Check if any values are set in the active array

  since: 3.2.0
  return: bool
end note

note right of Mappersingleinterface::set
  Set content

  since: 3.2.0
  return: void
end note

note right of Mappersingleinterface::get
  Get content

  since: 3.2.0
  return: mixed
end note

note right of Mappersingleinterface::exist
  Does key exist

  since: 3.2.0
  return: bool
end note

note right of Mappersingleinterface::add
  Add content

  since: 3.2.0
  return: void
end note

note right of Mappersingleinterface::remove
  Remove content

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


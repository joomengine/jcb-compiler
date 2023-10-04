```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Mapperdoubleinterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces**
```uml
@startuml
interface Mapperdoubleinterface  #Lavender {
  + isActive(string $firstKey = null) : bool
  + set(string $firstKey, string $secondKey, ...) : void
  + get(string $firstKey, ?string $secondKey = null) : mixed
  + exist(string $firstKey, ?string $secondKey = null) : bool
  + add(string $firstKey, string $secondKey, ...) : void
  + remove(string $firstKey, ?string $secondKey = null) : void
}

note right of Mapperdoubleinterface::isActive
  Check if any values are set in the active array.

  since: 3.2.0
  return: bool
end note

note right of Mapperdoubleinterface::set
  Set dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
end note

note right of Mapperdoubleinterface::get
  Get dynamic content

  since: 3.2.0
  return: mixed
end note

note right of Mapperdoubleinterface::exist
  Does keys exist

  since: 3.2.0
  return: bool
end note

note right of Mapperdoubleinterface::add
  Add dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
    bool $array = false
end note

note right of Mapperdoubleinterface::remove
  Remove dynamic content

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


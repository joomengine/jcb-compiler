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
  + isActive_(string $firstKey = null) : bool
  + set_(string $firstKey, string $secondKey, ...) : void
  + get_(string $firstKey, ?string $secondKey = null) : mixed
  + exist_(string $firstKey, ?string $secondKey = null) : bool
  + add_(string $firstKey, string $secondKey, ...) : void
  + remove_(string $firstKey, ?string $secondKey = null) : void
}

note right of Mapperdoubleinterface::isActive_
  Check if any values are set in the active array.

  since: 3.2.0
  return: bool
end note

note right of Mapperdoubleinterface::set_
  Set dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
end note

note right of Mapperdoubleinterface::get_
  Get dynamic content

  since: 3.2.0
  return: mixed
end note

note right of Mapperdoubleinterface::exist_
  Does keys exist

  since: 3.2.0
  return: bool
end note

note right of Mapperdoubleinterface::add_
  Add dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
end note

note right of Mapperdoubleinterface::remove_
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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Placefix (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
abstract Placefix  #Orange {
  + {static} _(string $string) : string
  + {static} b() : string
  + {static} d() : string
  + {static} _h(string $string) : string
  + {static} h() : string
}

note right of Placefix::_
  Get a prefix and suffix added to given string

  since: 3.2.0
  return: string
end note

note right of Placefix::b
  Get a open prefix

  since: 3.2.0
  return: string
end note

note right of Placefix::d
  Get a close suffix

  since: 3.2.0
  return: string
end note

note right of Placefix::_h
  Get a hash prefix and suffix added to given string

  since: 3.2.0
  return: string
end note

note right of Placefix::h
  Get a hash-fix

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


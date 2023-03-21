```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Line (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
abstract Line  #Orange {
  - static $add
  + {static} _(int $nr, string $class) : string
  - {static} add() : bool
  - {static} init() : void
}

note right of Line::_
  Set the line number in comments

  since: 3.2.0
  return: string
end note

note right of Line::add
  Check if we should add the line number

  since: 3.2.0
  return: bool
end note

note right of Line::init
  The constructor for add

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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class UniqueName (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
```uml
@startuml
class UniqueName  #Gold {
  # Registry $registry
  + __construct(?Registry $registry = null)
  + set(string $name, string $view) : void
  + get(string $name, string $view) : string
}

note right of UniqueName::__construct
  Constructor

  since: 3.2.0
end note

note right of UniqueName::set
  Count how many times the same field is used per view

  since: 3.2.0
  return: void
end note

note right of UniqueName::get
  Naming each field with an unique name

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


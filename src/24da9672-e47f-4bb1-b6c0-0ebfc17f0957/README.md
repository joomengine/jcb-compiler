```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class CoreRule (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field\JoomlaThree**
```uml
@startuml
class CoreRule  #Gold {
  # array $rules
  # string $path
  + __construct()
  + get(bool $lowercase = false) : array
  - set(string $path) : void
}

note right of CoreRule::__construct
  Constructor

  since: 3.2.0
end note

note right of CoreRule::get
  Get the Array of Existing Validation Rule Names

  since: 3.2.0
  return: array
end note

note right of CoreRule::set
  Set the rules found in a path

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


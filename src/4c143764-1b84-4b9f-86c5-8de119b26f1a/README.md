```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class CoreField (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field\JoomlaFive**
```uml
@startuml
class CoreField << (F,LightGreen) >> #RoyalBlue {
  # array $fields
  # array $paths
  + __construct()
  + get(bool $lowercase = false) : array
  - set(string $path) : void
}

note right of CoreField::__construct
  Constructor

  since: 3.2.0
end note

note right of CoreField::get
  Get the Array of Existing Validation Field Names

  since: 3.2.0
  return: array
end note

note right of CoreField::set
  Set the fields found in a path

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


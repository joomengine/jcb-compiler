```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Rule (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
```uml
@startuml
class Rule  #Gold {
  # Registry $registry
  # Customcode $customcode
  # Gui $gui
  # Placeholder $placeholder
  # CoreRule $corerule
  + __construct(Registry $registry, Customcode $customcode, ...)
  + set(int $id, string $field) : void
}

note right of Rule::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Registry $registry
    Customcode $customcode
    Gui $gui
    Placeholder $placeholder
    CoreRule $corerule
end note

note right of Rule::set
  Set the validation rule

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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Validation (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
```uml
@startuml
class Validation  #Gold {
  # Registry $registry
  # Gui $gui
  # Placeholder $placeholder
  # Customcode $customcode
  # CoreValidationInterface $validation
  + __construct(?Registry $registry = null, ?Gui $gui = null, ...)
  + set(int $id, string $field) : void
}

note right of Validation::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Registry $registry = null
    ?Gui $gui = null
    ?Placeholder $placeholder = null
    ?Customcode $customcode = null
    ?CoreValidationInterface $validation = null
end note

note right of Validation::set
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


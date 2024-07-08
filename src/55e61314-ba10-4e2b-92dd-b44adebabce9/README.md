```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Conditions (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Conditions  #Gold {
  # TypeName $typeName
  # FieldName $fieldName
  # FieldGroups $fieldGroups
  + __construct(?TypeName $typeName = null, ?FieldName $fieldName = null, ...)
  + set(object $item) : void
}

note right of Conditions::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?TypeName $typeName = null
    ?FieldName $fieldName = null
    ?FieldGroups $fieldGroups = null
end note

note right of Conditions::set
  Set the conditions

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


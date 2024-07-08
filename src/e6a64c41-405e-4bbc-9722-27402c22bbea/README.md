```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Fields (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Fields  #Gold {
  # Config $config
  # Registry $registry
  # HistoryInterface $history
  # Customcode $customcode
  # Field $field
  # FieldName $fieldName
  # FieldGroups $fieldGroups
  # UpdateSql $updateSql
  # CMSApplication $app
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + set(object $item) : void
}

note right of Fields::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?HistoryInterface $history = null
    ?Customcode $customcode = null
    ?Field $field = null
    ?FieldName $fieldName = null
    ?FieldGroups $fieldGroups = null
    ?UpdateSql $updateSql = null
    ?CMSApplication $app = null
end note

note right of Fields::set
  Set fields

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


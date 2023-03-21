```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
```uml
@startuml
class Data  #Gold {
  # array $fields
  # Config $config
  # EventInterface $event
  # HistoryInterface $history
  # Placeholder $placeholder
  # Customcode $customcode
  # FieldCustomcode $fieldCustomcode
  # Validation $validation
  # \JDatabaseDriver $db
  + __construct(?Config $config = null, ?EventInterface $event = null, ...)
  + get(int $id, ?string $singleViewName = null, ...) : ?object
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?EventInterface $event = null
    ?HistoryInterface $history = null
    ?Placeholder $placeholder = null
    ?Customcode $customcode = null
    ?FieldCustomcode $fieldCustomcode = null
    ?Validation $validation = null
    ?\JDatabaseDriver $db = null
end note

note right of Data::get
  Get all Field Data

  since: 3.2.0
  return: ?object
  
  arguments:
    int $id
    ?string $singleViewName = null
    ?string $listViewName = null
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


```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class DatabaseName (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Field**
> extends: ****
```uml
@startuml
class DatabaseName  #Gold {
  # Lists $lists
  # Registry $registry
  + __construct(Lists $lists, Registry $registry)
  + get(string $nameListCode, int $fieldId, ...) : ?string
}

note right of DatabaseName::__construct
  Constructor.

  since: 3.2.0
end note

note right of DatabaseName::get
  get the field database name and AS prefix

  since: 3.2.0
  return: ?string
  
  arguments:
    string $nameListCode
    int $fieldId
    string $targetArea = 'builder.list'
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


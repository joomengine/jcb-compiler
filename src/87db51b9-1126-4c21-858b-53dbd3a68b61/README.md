```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class History (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\JoomlaThree**
```uml
@startuml
class History  #Gold {
  # ?object $tmp
  # Config $config
  # \JDatabaseDriver $db
  + __construct(?Config $config = null, ?\JDatabaseDriver $db = null)
  + get(string $type, int $id) : ?object
  # set(object $object, int $action) : bool
}

note right of History::__construct
  Constructor

  since: 3.2.0
end note

note right of History::get
  Get Item History object

  since: 3.2.0
  return: ?object
end note

note right of History::set
  Set Item History Watch
0 = remove watch
1 = add watch

  since: 3.2.0
  return: bool
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


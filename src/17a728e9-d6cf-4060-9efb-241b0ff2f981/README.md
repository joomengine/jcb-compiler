```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Historycomponent (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Historycomponent  #Gold {
  # Config $config
  # HistoryInterface $history
  # Updatesql $updatesql
  + __construct(?Config $config = null, ?HistoryInterface $history = null, ...)
  + set(object $item) : void
  - setAdminView(object $item) : void
  - setComponent(object $item) : void
}

note right of Historycomponent::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?HistoryInterface $history = null
    ?Updatesql $updatesql = null
end note

note right of Historycomponent::set
  check if an update SQL is needed

  since: 3.2.0
  return: void
end note

note right of Historycomponent::setAdminView
  check if an update SQL is needed

  since: 3.2.0
  return: void
end note

note right of Historycomponent::setComponent
  Set the component history

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


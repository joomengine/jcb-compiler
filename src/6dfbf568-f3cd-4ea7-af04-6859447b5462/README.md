```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Historyadminview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Historyadminview  #Gold {
  # Config $config
  # HistoryInterface $history
  # Updatesql $updatesql
  + __construct(?Config $config = null, ?HistoryInterface $history = null, ...)
  + set(object $item) : void
}

note right of Historyadminview::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?HistoryInterface $history = null
    ?Updatesql $updatesql = null
end note

note right of Historyadminview::set
  check if an update SQL is needed

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


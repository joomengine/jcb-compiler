```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class History (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class History  #Gold {
  # $currentVersion
  + register(Container $container) : void
  + getHistory(Container $container) : HistoryInterface
  + getJ3History(Container $container) : J3History
  + getJ4History(Container $container) : J4History
  + getJ5History(Container $container) : J5History
}

note right of History::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of History::getHistory
  Get the History

  since: 3.2.0
  return: HistoryInterface
end note

note right of History::getJ3History
  Get the Joomla 3 History

  since: 3.2.0
  return: J3History
end note

note right of History::getJ4History
  Get the Joomla 4 History

  since: 3.2.0
  return: J4History
end note

note right of History::getJ5History
  Get the Joomla 5 History

  since: 3.2.0
  return: J5History
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


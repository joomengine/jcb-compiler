```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Event (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Event  #Gold {
  # $currentVersion
  + register(Container $container) : void
  + getEvent(Container $container) : EventInterface
  + getJ3Event(Container $container) : J3Event
  + getJ4Event(Container $container) : J4Event
}

note right of Event::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Event::getEvent
  Get the Event

  since: 3.2.0
  return: EventInterface
end note

note right of Event::getJ3Event
  Get the Joomla 3 Event

  since: 3.2.0
  return: J3Event
end note

note right of Event::getJ4Event
  Get the Joomla 4 Event

  since: 3.2.0
  return: J4Event
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

